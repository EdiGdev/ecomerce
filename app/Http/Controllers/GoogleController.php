<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        $user = Socialite::driver('google')->user();

        $authUser = User::where('email', $user->email)->first();

        if ($authUser) {

            $authUser->loadCachedAddress();
            auth()->login($authUser);

        } else {

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

       
        return redirect()->route('home');
    }
}
