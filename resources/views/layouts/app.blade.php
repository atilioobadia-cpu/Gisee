<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Gisee Infotech | General IT Services & Software Development')</title>
    <meta
        name="description"
        content="Gisee Infotech builds polished digital platforms, IT services, and custom software with an owner-level mindset."
    >
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap"
        rel="stylesheet"
    >
    <link rel="icon" type="image/png" href="{{ asset('images/giseepng.png') }}">
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/giseepng.png') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
@php
    // Decide whether the server should ask the front-end to re-open a modal —
    // either because of an explicit redirect (GET /login, GET /register) or
    // because validation failed inside one of the modal forms.
    $openModal = session('open_modal');
    $authMode = session('auth_mode', 'signin');

    if (! $openModal) {
        if ($errors->getBag('register')->isNotEmpty()) {
            $openModal = 'auth';
            $authMode = 'signup';
        } elseif ($errors->getBag('login')->isNotEmpty()) {
            $openModal = 'auth';
            $authMode = 'signin';
        } elseif ($errors->getBag('contact')->isNotEmpty()) {
            $openModal = 'contact';
        }
    }
@endphp
<body
    @if ($openModal) data-open-modal="{{ $openModal }}" @endif
    data-auth-initial-mode="{{ $authMode }}"
>
    <div class="site-shell">
        @include('partials.header')

        <main>
            @yield('content')

            <div class="toast-container" aria-live="polite" aria-atomic="true"></div>

            @include('partials.auth-modal')
            @include('partials.contact-modal')
        </main>

        @include('partials.footer')

        <a
            class="whatsapp-bubble"
            href="https://wa.me/{{ config('site.contact.whatsapp') }}"
            target="_blank"
            rel="noopener noreferrer"
            aria-label="Chat with us on WhatsApp at {{ config('site.contact.phone') }}"
            title="WhatsApp us"
        >
            <span class="whatsapp-bubble-icon icon-inline" aria-hidden="true"><x-icon name="whatsapp" /></span>
        </a>
    </div>

    {{-- Server-side flash messages handed to site.js, which renders them as toasts. --}}
    @if (session('toast'))
        <span
            data-flash-toast="{{ session('toast') }}"
            data-flash-type="{{ session('toast_type', 'info') }}"
            hidden
        ></span>
    @endif
</body>
</html>
