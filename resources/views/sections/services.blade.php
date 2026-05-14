<section class="content-section services-overview-section" id="services">
    <div class="services-overview-shell" data-reveal>
        <div class="section-intro services-overview-intro">
            <p class="eyebrow">WHAT WE DO</p>
            <h2><span>Gisee</span> <em>services</em></h2>
            <p class="services-overview-copy">
                We cover both IT operations and software delivery, giving businesses one accountable
                team for infrastructure, security, engineering, design, and long-term support.
            </p>
        </div>

        <div class="services-mode-switch" role="tablist" aria-label="Service categories">
            @foreach (config('site.service_overview_modes') as $index => $mode)
                <button
                    class="services-mode-tab{{ $index === 0 ? ' is-active' : '' }}"
                    type="button"
                    role="tab"
                    data-service-tab="{{ $mode['id'] }}"
                    aria-selected="{{ $index === 0 ? 'true' : 'false' }}"
                >
                    {{ $mode['label'] }}
                </button>
            @endforeach
        </div>

        @foreach (config('site.service_overview_modes') as $index => $mode)
            <div
                class="services-mode-panel{{ $index === 0 ? ' is-active' : '' }}"
                data-service-panel="{{ $mode['id'] }}"
                role="tabpanel"
                @if ($index !== 0) hidden @endif
            >
                <p class="services-mode-copy">{{ $mode['headline'] }}</p>

                <div class="services-mode-grid">
                    @foreach ($mode['items'] as $item)
                        <article class="service-mode-card" data-service-motion>
                            <div class="service-mode-visual" aria-hidden="true">
                                <span class="service-mode-orb service-mode-orb-a"></span>
                                <span class="service-mode-orb service-mode-orb-b"></span>
                                <span class="service-mode-icon icon-inline"><x-icon :name="$item['icon']" /></span>
                            </div>
                            <h3>{{ $item['title'] }}</h3>
                            <p>{{ $item['text'] }}</p>
                        </article>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
</section>
