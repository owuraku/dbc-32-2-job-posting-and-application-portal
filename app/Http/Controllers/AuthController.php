<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Mail\WelcomeEmail;
use App\Models\User;
use App\Services\SendSMS;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    //

    public function registrationPage()
    {
        return view('auth.register');
    }

    public function register(RegisterRequest $request)
    {
        $data = $request->validated();

        $user = User::create($data);

        $userHash = Hash::make($user->email);

        $verifyUrl = route('auth.verify.email', [
            'email' => $user->email,
            'hash' => $userHash
        ]);

        $mail = new WelcomeEmail($user->fullname, $verifyUrl);
        Mail::to($user->email)->send($mail);

        SendSMS::send($user->contact, "Hi $user->fullname, \nThank you for registering with us. Enjoy your stay");

        return redirect('/');
    }

    public function loginPage()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt([
            ...$credentials,
            fn(Builder $query) => $query->whereNotNull('email_verified_at'),
        ])) {
            $request->session()->regenerate();

            return redirect()->intended('/');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records or email hasn\'t been verified',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        $request->session()->invalidate();
        return redirect('/');
    }

    public function verifyEmail(Request $request, string $email, string $hash)
    {
        try {
            if (Hash::check($email, $hash)) {
                $user = User::where('email', $email)->first();
                $user->email_verified_at = now();
                $user->save();

                // Auth::login()
                return redirect(route('auth.login.page'));
            }
        } catch (\Throwable $th) {
            throw $th;
        }
        return redirect('/')->with('error', 'Invalid Token');
    }
}
