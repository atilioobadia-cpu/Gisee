<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisteredUserController extends Controller
{
    /**
     * Register a new account from the homepage sign-up modal and log it in.
     */
    public function store(RegisterRequest $request): RedirectResponse
    {
        $user = User::create([
            'name' => $request->validated('signup_name'),
            'email' => $request->validated('signup_email'),
            'password' => Hash::make($request->validated('signup_password')),
        ]);

        Auth::login($user);

        $request->session()->regenerate();

        return redirect()
            ->intended(route('home'))
            ->with('toast', 'Welcome to Gisee, '.$user->name.'. Your account is ready.')
            ->with('toast_type', 'success');
    }
}
