<section class="content-section transformation-section" id="transformation">
    <div class="transform-card" data-reveal>
        <div class="transform-content">
            <p class="eyebrow eyebrow-light">DIGITAL TRANSFORMATION</p>
            <h2>Accelerating Digital Transformation</h2>
            <p>
                We specialize in transforming businesses through modernization, digital technology
                adoption, and innovative workflow solutions.
            </p>

            <a class="cta-pill transform-button" href="#services">
                <span>Learn more</span>
                <span class="contact-pill-badge icon-inline"><x-icon name="play" /></span>
            </a>

            <div class="transform-points">
                @foreach (config('site.transformation_points') as $point)
                    <div class="transform-point">
                        <span class="mini-icon icon-inline"><x-icon :name="$point['icon']" /></span>
                        <span>{{ $point['label'] }}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
