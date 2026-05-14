<section class="hero showcase-hero" id="home">
    <div class="hero-showcase">
        <div class="hero-artboard" aria-hidden="true">
            <span class="art-square art-square-1"></span>
            <span class="art-square art-square-2"></span>
            <span class="art-square art-square-3"></span>
            <span class="art-square art-square-4"></span>
            <span class="art-square art-square-5"></span>
            <span class="art-square art-square-6"></span>
            <span class="art-square art-square-7"></span>
            <span class="art-square art-square-8"></span>
            <span class="art-square art-square-9"></span>
            <span class="art-square art-square-10"></span>

            <div class="art-card art-card-intro">
                <div class="intro-card-shell">
                    <span class="intro-card-orbit intro-card-orbit-1"></span>
                    <span class="intro-card-orbit intro-card-orbit-2"></span>
                    <span class="intro-card-icon icon-inline"><x-icon name="computer-3d" /></span>
                </div>
            </div>

            <div class="art-connector art-connector-top"></div>

            <div class="art-card art-card-device">
                <div class="device-surface">
                    <div class="device-icon icon-inline"><x-icon name="shield-check" /></div>
                </div>
            </div>

            <div class="art-card art-card-profile">
                <div class="profile-card-shell">
                    <span class="profile-card-icon icon-inline"><x-icon name="browser-layout" /></span>
                </div>
            </div>

            <div class="mini-chip mini-chip-gold">
                <span class="icon-inline"><x-icon name="browser-layout" /></span>
            </div>

            <div class="art-connector art-connector-bottom"></div>

            <div class="art-card art-card-chip">
                <div class="chip-graphic">
                    <div class="chip-core">
                        <span class="chip-core-icon icon-inline"><x-icon name="monitor-code" /></span>
                    </div>
                </div>
            </div>

            <div class="mini-chip mini-chip-dark">
                <span class="icon-inline"><x-icon name="network-nodes" /></span>
            </div>

            <div class="mini-chip mini-chip-accent">
                <span class="icon-inline"><x-icon name="api-merge" /></span>
            </div>
        </div>

        <div class="hero-summary-main">
            <h1>
                <span>Future Through</span>
                <span>Cutting-Edge</span>
                <span>Assets.</span>
            </h1>
            <p class="hero-text">
                By empowering users with greater control over their data, identity, and assets.
            </p>

            <div class="hero-actions hero-actions-compact">
                <button class="cta-pill cta-primary" type="button" data-contact-open>
                    <span>Get In Touch</span>
                    <span class="contact-pill-badge icon-inline"><x-icon name="arrow" /></span>
                </button>
                @guest
                    <a class="inline-link" href="{{ route('login') }}" data-auth-open="signin">
                        <span>Log In</span>
                        <span class="icon-inline"><x-icon name="arrow" /></span>
                    </a>
                @else
                    <form method="POST" action="{{ route('logout') }}" class="inline-link-form">
                        @csrf
                        <button class="inline-link" type="submit">
                            <span>Log Out ({{ Str::of(auth()->user()->name)->before(' ') }})</span>
                            <span class="icon-inline"><x-icon name="logout" /></span>
                        </button>
                    </form>
                @endguest
            </div>
        </div>

        <div class="hero-stats">
            @foreach (config('site.hero_stats') as $stat)
                <article class="hero-stat">
                    <strong
                        class="count-number"
                        data-target="{{ $stat['value'] }}"
                        data-suffix="{{ $stat['suffix'] }}"
                    >0</strong>
                    <span>{{ $stat['label'] }}</span>
                </article>
            @endforeach
        </div>
    </div>
</section>
