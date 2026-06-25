@php
    $steps = [
        ['number' => '01', 'icon' => 'forum', 'title' => 'الاستشارة', 'description' => 'فهم المتطلبات والأهداف'],
        ['number' => '02', 'icon' => 'map', 'title' => 'التخطيط', 'description' => 'رسم خريطة الطريق'],
        ['number' => '03', 'icon' => 'design_services', 'title' => 'التصميم', 'description' => 'بناء الواجهات والتجربة'],
        ['number' => '04', 'icon' => 'code', 'title' => 'التطوير', 'description' => 'كتابة الأكواد والأنظمة'],
        ['number' => '05', 'icon' => 'fact_check', 'title' => 'الاختبار', 'description' => 'ضمان الجودة والأمان'],
        ['number' => '06', 'icon' => 'rocket_launch', 'title' => 'الإطلاق', 'description' => 'التشغيل والمتابعة'],
    ];
@endphp

<section class="services-section services-process">
    <header class="services-heading reveal">
        <h2>كيف ننفذ خدمتك؟</h2>
        <p>خطوات واضحة ومدروسة لضمان جودة المخرجات</p>
        <span></span>
    </header>

    <div class="container mx-auto px-margin-desktop">
        <div class="services-process-track reveal">
            @foreach ($steps as $step)
                <article class="services-process-step stagger-item">
                    <div class="services-process-icon">
                        <span class="services-process-number">{{ $step['number'] }}</span>
                        <span class="material-symbols-outlined">{{ $step['icon'] }}</span>
                    </div>
                    <h3>{{ $step['title'] }}</h3>
                    <p>{{ $step['description'] }}</p>
                </article>
            @endforeach
        </div>
    </div>
</section>
