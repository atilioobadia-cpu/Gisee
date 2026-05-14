<footer class="site-footer">
    <div class="simple-footer" data-reveal>
        <div class="simple-footer-top">
            <div class="simple-footer-brand">
                <img src="{{ asset('images/giseepng.png') }}" alt="Gisee logo" class="footer-brand-logo" width="132" height="38">
                <p class="simple-footer-copy">
                    General IT services and software development with clean delivery, strong support, and a more professional digital presence.
                </p>
            </div>

            <nav class="simple-footer-links" aria-label="Footer navigation">
                @foreach (config('site.footer_legal_links') as $link)
                    <a href="{{ $link['href'] }}">{{ $link['label'] }}</a>
                @endforeach
            </nav>

            <div class="simple-footer-actions">
                <button class="footer-action footer-action-primary" type="button" data-contact-open>Contact us</button>
                @guest
                    <button class="footer-action" type="button" data-auth-open="signup">Sign up</button>
                @else
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="footer-action" type="submit">Log out</button>
                    </form>
                @endguest
            </div>
        </div>

        <div class="simple-footer-bottom">
            <div class="footer-socials" aria-label="Social media links">
                @foreach (config('site.footer_social_links') as $item)
                    <a
                        class="footer-social"
                        href="{{ $item['href'] }}"
                        target="_blank"
                        rel="noopener noreferrer"
                        aria-label="{{ $item['label'] }}"
                        title="{{ $item['label'] }}"
                    >
                        <span class="icon-inline"><x-icon :name="$item['icon']" /></span>
                    </a>
                @endforeach

                <a
                    class="footer-social footer-social-whatsapp"
                    href="https://wa.me/{{ config('site.contact.whatsapp') }}"
                    target="_blank"
                    rel="noopener noreferrer"
                    aria-label="WhatsApp {{ config('site.contact.phone') }}"
                    title="WhatsApp {{ config('site.contact.phone') }}"
                >
                    <span class="footer-whatsapp-icon icon-inline" aria-hidden="true"><x-icon name="whatsapp" /></span>
                </a>
            </div>

            <div class="footer-contact-panel">
                <a class="footer-contact-item" href="mailto:{{ config('site.contact.email') }}">
                    <span class="icon-inline"><x-icon name="mail" /></span>
                    <span>{{ config('site.contact.email') }}</span>
                </a>
                <a class="footer-contact-item" href="tel:{{ config('site.contact.phone') }}">
                    <span class="icon-inline"><x-icon name="mobile" /></span>
                    <span>{{ config('site.contact.phone') }}</span>
                </a>
            </div>

            <span class="simple-footer-meta">&copy; {{ date('Y') }} Gisee Infotech. All rights reserved.</span>
        </div>
    </div>
</footer>
