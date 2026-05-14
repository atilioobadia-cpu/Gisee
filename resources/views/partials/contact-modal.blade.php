<section class="content-section contact-modal" id="contact-modal" hidden aria-hidden="true">
    <div class="contact-modal-backdrop" data-contact-close></div>
    <div class="contact-modal-stage" role="dialog" aria-modal="true" aria-labelledby="contact-title">
        <div class="contact-modal-side">
            <p class="eyebrow eyebrow-light">CONTACT US</p>
            <h2 id="contact-title">Let's build something clean and professional.</h2>
            <p class="contact-modal-copy">
                Tell us whether you need software development, IT support, security, or a polished digital platform.
            </p>

            <div class="contact-modal-highlights">
                <div class="contact-modal-pill">
                    <span class="mini-icon icon-inline"><x-icon name="code" /></span>
                    <span>Software delivery</span>
                </div>
                <div class="contact-modal-pill">
                    <span class="mini-icon icon-inline"><x-icon name="support" /></span>
                    <span>IT support</span>
                </div>
                <div class="contact-modal-pill">
                    <span class="mini-icon icon-inline"><x-icon name="shield" /></span>
                    <span>Security help</span>
                </div>
            </div>
        </div>

        <div class="contact-modal-form-shell">
            <button class="contact-close" type="button" aria-label="Close contact form" data-contact-close>
                <span></span>
                <span></span>
            </button>

            <div class="contact-modal-form-head">
                <p class="eyebrow">SEND A MESSAGE</p>
                <h3>Contact form</h3>
                <p>Fill in your details and share what you need.</p>
            </div>

            <form class="contact-modal-form" method="POST" action="{{ route('contact.store') }}" novalidate>
                @csrf
                <label class="contact-field">
                    <span>Name</span>
                    <input type="text" name="contact_name" placeholder="Enter your name" autocomplete="name" value="{{ old('contact_name') }}">
                    @error('contact_name', 'contact')
                        <span class="contact-field-error">{{ $message }}</span>
                    @enderror
                </label>

                <label class="contact-field">
                    <span>E-mail Address</span>
                    <input type="email" name="contact_email" placeholder="Enter your e-mail" autocomplete="email" value="{{ old('contact_email') }}">
                    @error('contact_email', 'contact')
                        <span class="contact-field-error">{{ $message }}</span>
                    @enderror
                </label>

                <label class="contact-field">
                    <span>Phone Number</span>
                    <input type="tel" name="contact_phone" placeholder="Enter your phone number" autocomplete="tel" value="{{ old('contact_phone') }}">
                    @error('contact_phone', 'contact')
                        <span class="contact-field-error">{{ $message }}</span>
                    @enderror
                </label>

                <label class="contact-field">
                    <span>Service Needed</span>
                    <select name="contact_service">
                        <option value="">Select a service</option>
                        @foreach (config('site.contact_services') as $service)
                            <option value="{{ $service }}" @selected(old('contact_service') === $service)>{{ $service }}</option>
                        @endforeach
                    </select>
                    @error('contact_service', 'contact')
                        <span class="contact-field-error">{{ $message }}</span>
                    @enderror
                </label>

                <label class="contact-field contact-field-message">
                    <span>Message</span>
                    <textarea name="contact_message" rows="4" placeholder="Tell us about your project or support need">{{ old('contact_message') }}</textarea>
                    @error('contact_message', 'contact')
                        <span class="contact-field-error">{{ $message }}</span>
                    @enderror
                </label>

                <div class="contact-form-actions">
                    <button class="contact-submit contact-submit-primary" type="submit">Send</button>
                    <button class="contact-submit contact-submit-secondary" type="button" data-contact-close>Cancel</button>
                </div>
            </form>
        </div>
    </div>
</section>
