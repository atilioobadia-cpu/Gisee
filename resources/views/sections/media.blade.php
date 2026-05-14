<section class="content-section media-section" id="media">
    <div class="section-intro" data-reveal>
        <p class="eyebrow">MEDIA</p>
        <h2>Content and presentation support that makes technology feel easier to trust.</h2>
    </div>

    <div class="card-grid media-grid">
        @foreach (config('site.media_cards') as $card)
            <article class="media-card" data-reveal>
                <span class="card-icon icon-inline"><x-icon :name="$card['icon']" /></span>
                <h3>{{ $card['title'] }}</h3>
                <p>{{ $card['text'] }}</p>
            </article>
        @endforeach
    </div>
</section>
