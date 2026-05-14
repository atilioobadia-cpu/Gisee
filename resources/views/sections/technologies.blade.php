@php($marqueeCopies = config('site.technology_marquee_copies'))
<section class="content-section technologies-section" id="technologies">
    <div class="technologies-shell" data-reveal>
        <div class="section-intro technologies-intro">
            <h2>Technologies</h2>
            <p class="technologies-copy">Tools we use.</p>
        </div>

        <div class="technologies-marquee" aria-label="Technologies we use">
            @foreach (config('site.technology_lanes') as $lane)
                <div
                    class="technology-lane technology-lane--{{ $lane['direction'] }}"
                    style="--marquee-duration: {{ $lane['duration'] }}; --marquee-delay: {{ $lane['delay'] }}; --marquee-repeat: {{ $marqueeCopies }};"
                >
                    <div class="technology-lane-track">
                        @for ($copy = 0; $copy < $marqueeCopies; $copy++)
                            <div class="technology-lane-group" @if ($copy > 0) aria-hidden="true" @endif>
                                @foreach ($lane['items'] as $item)
                                    <div
                                        class="technology-pill"
                                        aria-label="{{ $item['name'] }}"
                                        style="--tech-soft: {{ $item['soft'] }};"
                                    >
                                        <span class="technology-mark" aria-hidden="true">
                                            <img
                                                src="{{ asset('images/tech-icons/'.rawurlencode($item['icon'])) }}"
                                                alt=""
                                                loading="eager"
                                                decoding="async"
                                            >
                                        </span>
                                    </div>
                                @endforeach
                            </div>
                        @endfor
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
