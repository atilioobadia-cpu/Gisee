@php($isSignup = ($authMode ?? 'signin') === 'signup')
<section class="content-section auth-section" id="auth" hidden aria-hidden="true">
    <div class="auth-backdrop" data-auth-close></div>
    <div
        class="auth-stage"
        data-auth-stage
        data-auth-state="{{ $isSignup ? 'signup' : 'signin' }}"
        role="dialog"
        aria-modal="true"
        aria-labelledby="auth-title"
    >
        <button class="auth-close" type="button" aria-label="Close form" data-auth-close>
            <span></span>
            <span></span>
        </button>

        <div class="auth-card-head">
            <span class="auth-card-logo">
                <img src="{{ asset('images/giseepng.png') }}" alt="Gisee" width="110" height="32">
            </span>
            <h2 id="auth-title" class="auth-card-title">
                <span class="auth-title-signin">Login to Gisee</span>
                <span class="auth-title-signup">Create a Gisee account</span>
            </h2>
        </div>

        <form
            class="auth-form-panel {{ $isSignup ? '' : 'is-active' }}"
            data-auth-panel="signin"
            method="POST"
            action="{{ route('login.store') }}"
            @if ($isSignup) hidden @endif
            novalidate
        >
            @csrf
            <label class="auth-field">
                <span class="auth-field-label">Email</span>
                <span class="auth-input-wrap">
                    <span class="auth-input-icon icon-inline"><x-icon name="mail" /></span>
                    <input
                        type="email"
                        name="signin_email"
                        placeholder="hello@youremail.com"
                        autocomplete="email"
                        value="{{ old('signin_email') }}"
                    >
                </span>
                @error('signin_email', 'login')
                    <span class="auth-field-error">{{ $message }}</span>
                @enderror
            </label>

            <label class="auth-field">
                <span class="auth-field-label">Password</span>
                <span class="auth-input-wrap">
                    <span class="auth-input-icon icon-inline"><x-icon name="lock" /></span>
                    <input type="password" name="signin_password" placeholder="Enter your password" autocomplete="current-password">
                    <button type="button" class="auth-show-toggle" data-password-toggle aria-label="Show password">Show</button>
                </span>
                @error('signin_password', 'login')
                    <span class="auth-field-error">{{ $message }}</span>
                @enderror
            </label>

            <div class="auth-form-meta">
                <label class="auth-remember">
                    <input type="checkbox" name="remember" value="1">
                    <span>Remember me</span>
                </label>

                <button class="auth-quiet-link auth-forgot" type="button" data-contact-open>
                    Forgot password?
                </button>
            </div>

            <button class="auth-submit auth-submit-primary" type="submit">Login</button>
        </form>

        <form
            class="auth-form-panel {{ $isSignup ? 'is-active' : '' }}"
            data-auth-panel="signup"
            method="POST"
            action="{{ route('register.store') }}"
            @unless ($isSignup) hidden @endunless
            novalidate
        >
            @csrf
            <label class="auth-field">
                <span class="auth-field-label">Name</span>
                <span class="auth-input-wrap">
                    <span class="auth-input-icon icon-inline"><x-icon name="user" /></span>
                    <input type="text" name="signup_name" placeholder="Enter your name" autocomplete="name" value="{{ old('signup_name') }}">
                </span>
                @error('signup_name', 'register')
                    <span class="auth-field-error">{{ $message }}</span>
                @enderror
            </label>

            <label class="auth-field">
                <span class="auth-field-label">Email</span>
                <span class="auth-input-wrap">
                    <span class="auth-input-icon icon-inline"><x-icon name="mail" /></span>
                    <input type="email" name="signup_email" placeholder="Enter your e-mail" autocomplete="email" value="{{ old('signup_email') }}">
                </span>
                @error('signup_email', 'register')
                    <span class="auth-field-error">{{ $message }}</span>
                @enderror
            </label>

            <label class="auth-field">
                <span class="auth-field-label">Password</span>
                <span class="auth-input-wrap">
                    <span class="auth-input-icon icon-inline"><x-icon name="lock" /></span>
                    <input type="password" name="signup_password" placeholder="Create a password" autocomplete="new-password">
                    <button type="button" class="auth-show-toggle" data-password-toggle aria-label="Show password">Show</button>
                </span>
                @error('signup_password', 'register')
                    <span class="auth-field-error">{{ $message }}</span>
                @enderror
            </label>

            <button class="auth-submit auth-submit-primary" type="submit">Sign Up</button>
        </form>

        <div class="auth-card-foot">
            <p class="auth-switch auth-switch-signin">
                Don't have an account?
                <button type="button" class="auth-switch-link" data-auth-mode="signup">Sign up</button>
            </p>
            <p class="auth-switch auth-switch-signup">
                Already have an account?
                <button type="button" class="auth-switch-link" data-auth-mode="signin">Log in</button>
            </p>
        </div>
    </div>
</section>
