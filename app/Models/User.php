<?php

namespace App\Models;

use Bavix\Wallet\Interfaces\Customer;

use Bavix\Wallet\Traits\CanPay;
use ChristianKuri\LaravelFavorite\Traits\Favoriteability;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Support\Facades\Cache;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Storage;

class User extends Authenticatable implements Customer, MustVerifyEmail
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;
    use HasRoles;
    use CanPay;
    use Favoriteability;
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'unique_code',
        'phone',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];
    public function orders()
    {
        return $this->hasMany(Order::class);
    }


    protected static function boot()
    {
        parent::boot();

        static::creating(function ($user) {
            do {
                $uniqueCode = mt_rand(10000000, 99999999);
            } while (User::where('unique_code', $uniqueCode)->exists());

            $user->unique_code = $uniqueCode;
        });
    }


    public function getProfilePhotoUrlAttribute()
    {
        return $this->profile_photo_path
            ? Storage::url($this->profile_photo_path)
            : $this->defaultProfilePhotoUrl();
    }

    public function addresses()
    {
        return $this->hasMany(Address::class);
    }


    public function loadCachedAddress()
    {
        $cacheKey = 'user_address_' . md5(request()->ip());

        if (Cache::has($cacheKey)) {
            // Obtener los datos de caché
            $cachedAddress = Cache::get($cacheKey);

            // Verificar si el usuario ya tiene una dirección
            $userAddress = $this->addresses()->first();

            if ($userAddress) {
                // Actualizar la dirección existente
                $userAddress->update([
                    'department_id' => $cachedAddress['department_id'],
                    'city_id' => $cachedAddress['city_id'],
                    'district_id' => $cachedAddress['district_id'],
                    'address' => $cachedAddress['address'],
                    'reference' => $cachedAddress['reference'],
                ]);
            } else {
                // Crear una nueva dirección
                $this->addresses()->create([
                    'department_id' => $cachedAddress['department_id'],
                    'city_id' => $cachedAddress['city_id'],
                    'district_id' => $cachedAddress['district_id'],
                    'address' => $cachedAddress['address'],
                    'reference' => $cachedAddress['reference'],
                ]);
            }

            // Limpiar la caché después de usar los datos
            Cache::forget($cacheKey);
        }
    }
}
