<section id="partners" class="brand-logos-section partners-section">
    <div class="brand-section-decoration" aria-hidden="true">
        <span class="brand-diagonal brand-diagonal--one"></span>
        <span class="brand-diagonal brand-diagonal--two"></span>
        <span class="brand-float brand-float--one"></span>
        <span class="brand-float brand-float--two"></span>
        <span class="brand-float brand-float--three"></span>
    </div>

    <div class="container mx-auto px-margin-desktop relative z-10">
        <header class="brand-section-heading reveal">
            <span class="brand-section-kicker stagger-item">شراكات موثوقة</span>
            <h2 class="brand-section-title stagger-item">شركاؤنا في النجاح</h2>
            <p class="brand-section-subtitle stagger-item">
                نفتخر بشراكاتنا مع جهات وشركات تساعدنا على تقديم حلول تقنية متكاملة وموثوقة لعملائنا.
            </p>
            <span class="brand-section-divider stagger-item" aria-hidden="true"></span>
        </header>
    </div>

    <div class="partners-marquee reveal" aria-label="شركاؤنا">
        <div class="partners-marquee__track">
            @foreach ($partners->concat($partners) as $partner)
                <x-logo-card
                    variant="partner"
                    :name="$partner->name"
                    :icon="$partner->icon"
                    class="stagger-item"
                />
            @endforeach
        </div>
    </div>
</section>
