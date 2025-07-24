<?php

namespace GoogleSSO\Http\Controllers;

use Illuminate\Routing\Controller;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\User;

class GoogleSSOController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->stateless()->redirect();
    }

    public function callback()
    {
        $googleUser = Socialite::driver('google')->stateless()->user();

        $user = User::updateOrCreate(
            ['email' => $googleUser->getEmail()],
            [
                'name' => $googleUser->getName(),
                'google_id' => $googleUser->getId(),
                'email_verified_at' => now(),
                'password' => bcrypt(Str::random(24)),
            ]
        );

        Auth::login($user);

        if (config('google-sso.issue_token')) {
            $token = $user->createToken('google')->plainTextToken;
            return redirect(config('google-sso.frontend_url') . '?token=' . $token);
        }

        return redirect(config('google-sso.frontend_url'));
    }
}
