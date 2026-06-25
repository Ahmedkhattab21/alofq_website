<section class="about-hero">
    <canvas id="about-hero-canvas" aria-hidden="true"></canvas>

    <div class="container mx-auto px-margin-desktop relative z-10">
        <div class="max-w-3xl text-right reveal">
            <span class="about-badge stagger-item">شركة الأفق المتعدد لتقنية المعلومات</span>
            <h1 class="about-display stagger-item">من <span class="about-gradient-text">نحن</span></h1>
            <p class="about-lead stagger-item">
                نقدم حلولاً برمجية متكاملة تساعد الشركات على التحول الرقمي بذكاء وكفاءة.
                نحن لا نبني أنظمة فقط، بل نصنع تجارب رقمية تعيد تعريف كيفية تفاعل العالم مع التكنولوجيا.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 stagger-item">
                <a href="{{ route('home') }}#services" class="brand-gradient text-center text-white px-8 py-4 rounded-xl font-title-md hover-lift">اكتشف خدماتنا</a>
                <a href="{{ route('contact') }}" class="border-2 border-outline text-center text-on-surface px-8 py-4 rounded-xl font-title-md hover:bg-surface-variant transition-colors">تواصل معنا</a>
            </div>
        </div>
    </div>

    <div class="about-hero-glow" aria-hidden="true"></div>
</section>
