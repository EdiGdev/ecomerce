<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class FacebookController extends Controller
{
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function handleFacebookCallback()
    {
        $user = Socialite::driver('facebook')->user();

        // Procesar la información del usuario retornado por Facebook
        $authUser = User::where('email', $user->email)->first();

        if ($authUser) {
            // Si el usuario ya existe en la base de datos, autenticarlo
            $authUser->loadCachedAddress();
            auth()->login($authUser);
        } else {
            // Si el usuario no existe, crear uno nuevo
            $newUser = new User();
            $newUser->name = $user->name;
            $newUser->email = $user->email;
            $password = bcrypt($user->id);
            $newUser->password = $password;
            $newUser->email_verified_at = now();

            $newUser->save();

            $newUser->assignRole('cliente');

            auth()->login($newUser);

            $newUser->loadCachedAddress();
        }

        // Redirigir a la página principal o a una URL deseada
        return redirect()->route('home');
    }
}
