<header class="topbar">
    <a class="brand" href="#home" aria-label="Gisee Infotech home">
        <img src="{{ asset('images/giseepng.png') }}" alt="Gisee logo" class="logo-image" width="150" height="44">
    </a>

    <div class="nav-panel">
        <nav class="nav-links" id="primary-navigation" aria-label="Primary navigation">
            @foreach (config('site.nav') as $item)
                <div class="nav-item">
                    <a class="nav-link" href="{{ $item['href'] }}">
                        <span>{{ $item['label'] }}</span>
                    </a>
                </div>
            @endforeach
        </nav>
    </div>

    <div class="nav-tools" aria-label="Navigation tools">
        <button class="header-contact-pill" type="button" data-contact-open>
            <span>Contact us</span>
            <span class="header-contact-badge icon-inline"><x-icon name="arrow" /></span>
        </button>
        <button
            class="mobile-menu-toggle nav-tool menu-tool"
            type="button"
            aria-label="Open navigation"
            aria-expanded="false"
            aria-controls="primary-navigation"
        >
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>
</header>
