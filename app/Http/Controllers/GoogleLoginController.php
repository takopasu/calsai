<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleLoginController extends Controller
{
    public function getGoogleAuth()
    {
        return Socialite::driver('google')
            ->redirect('/login/callback');
    }

    public function authGoogleCallback()
    {
        $googleUser = Socialite::driver('google')->stateless()->user();
        dd($googleUser);
        
        $user = User::firstOrCreate([
            'email' => $googleUser->email
        ], [
            'email_verified_at' => now(),
            'google_id' => $googleUser->getId()
        ]);
        Auth::login($user, true);
        return redirect('/');
    }
}
