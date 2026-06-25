@php
    $benefits = [
        ['icon' => 'tune', 'title' => 'حلول مخصصة', 'description' => 'نبني برمجيات تناسب احتياجاتك بالضبط بدلاً من القوالب الجاهزة المحدودة.'],
        ['icon' => 'speed', 'title' => 'أداء فائق', 'description' => 'نركز على سرعة الاستجابة وكفاءة الكود لضمان تجربة مستخدم مثالية.'],
        ['icon' => 'responsive_layout', 'title' => 'تصميم متجاوب', 'description' => 'نضمن ظهور خدمتك بشكل رائع على جميع الشاشات والمتصفحات.'],
        ['icon' => 'shield_lock', 'title' => 'أمان عالٍ', 'description' => 'نطبق أحدث معايير التشفير والحماية لضمان سلامة بياناتك وبيانات عملائك.'],
        ['icon' => 'trending_up', 'title' => 'قابلية التوسع', 'description' => 'نصمم أنظمتنا لتنمو مع نمو أعمالك دون الحاجة لإعادة بنائها.'],
        ['icon' => 'support_agent', 'title' => 'دعم مستمر', 'description' => 'فريقنا معك دائماً للمساعدة والتطوير المستمر لضمان استدامة النجاح.'],
    ];
@endphp

<section class="services-section bg-white">
    <header class="services-heading reveal">
        <h2>لماذا تختار خدمات الأفق؟</h2>
        <p>تفاصيل دقيقة تضمن لك حلاً تقنيًا مستقرًا وقابلاً للنمو</p>
        <span></span>
    </header>

    <div class="container mx-auto px-margin-desktop grid grid-cols-1 md:grid-cols-3 gap-gutter reveal">
        @foreach ($benefits as $benefit)
            <article class="services-benefit stagger-item">
                <span class="material-symbols-outlined">{{ $benefit['icon'] }}</span>
                <div>
                    <h3>{{ $benefit['title'] }}</h3>
                    <p>{{ $benefit['description'] }}</p>
                </div>
            </article>
        @endforeach
    </div>
</section>
