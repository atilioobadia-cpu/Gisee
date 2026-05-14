<section class="content-section showcase-section" id="softwares">
    <div class="showcase-copy" data-reveal>
        <p class="eyebrow">SOFTWARES</p>
        <h2>Software experiences that feel clean, fast, and ready for real business use.</h2>
        <p>
            We build systems that do more than look modern. They reduce friction, support teams, and
            create trust with customers through performance, structure, and clarity.
        </p>
    </div>

    <div class="showcase-panel" data-reveal>
        <div class="showcase-screen">
            <div class="screen-bar"></div>
            <div class="screen-grid">
                @foreach (config('site.software_showcase') as $item)
                    <div class="screen-tile">
                        <span class="card-icon icon-inline"><x-icon :name="$item['icon']" /></span>
                        <strong>{{ $item['title'] }}</strong>
                        <span>{{ $item['text'] }}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
