<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;

class RegisteredUserController extends Controller
{
    /**
     * Register a new account from the homepage sign-up modal.
     */
    public function store(RegisterRequest $request): RedirectResponse
    {
        $user = User::create([
            'name' => $request->validated('signup_name'),
            'email' => $request->validated('signup_email'),
            'password' => Hash::make($request->validated('signup_password')),
        ]);

        return redirect()
            ->route('home')
            ->with('open_modal', 'auth')
            ->with('auth_mode', 'signin')
            ->with('toast', 'Account created for '.$user->name.'. Please log in to continue.')
            ->with('toast_type', 'success');
    }
}
