<section class="content-section" id="delivery">
    <div class="section-intro" data-reveal>
        <p class="eyebrow">DELIVERY</p>
        <h2>Modern delivery for businesses that want design, engineering, and IT aligned.</h2>
    </div>

    <div class="card-grid services-grid">
        @foreach (config('site.services') as $service)
            <article class="service-card" data-reveal>
                <span class="card-icon icon-inline"><x-icon :name="$service['icon']" /></span>
                <h3>{{ $service['title'] }}</h3>
                <p>{{ $service['text'] }}</p>
            </article>
        @endforeach
    </div>
</section>
