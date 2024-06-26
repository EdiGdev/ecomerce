<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;

    protected $fillable = [
        'body',
        'user_id',
    ];

    //Relacion Uno a Muchos Inversa
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //Relacion Uno a Muchos Inversa
    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'answers')
            ->withPivot('reaction')
            ->withTimestamps();
    }
}
