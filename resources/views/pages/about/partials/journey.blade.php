<section class="about-section about-journey-section">
    <div class="container mx-auto px-margin-desktop">
        <header class="about-heading reveal">
            <h2>رحلة العمل مع الأفق</h2>
        </header>

        <div class="about-timeline reveal">
            <span class="about-timeline-line"></span>

            @foreach ([
                ['number' => '01', 'icon' => 'psychology', 'title' => 'فهم الفكرة', 'description' => 'نجلس معك لنفهم تطلعاتك وأهدافك بدقة.'],
                ['number' => '02', 'icon' => 'design_services', 'title' => 'التخطيط والتصميم', 'description' => 'نرسم خارطة الطريق ونبني واجهات تجربة المستخدم.'],
                ['number' => '03', 'icon' => 'code', 'title' => 'البرمجة والتطوير', 'description' => 'نحول التصاميم إلى واقع تقني صلب وسريع.'],
                ['number' => '04', 'icon' => 'rocket_launch', 'title' => 'الإطلاق والدعم', 'description' => 'نحتفل بالنجاح ونبقى بجانبك لضمان الاستمرارية.'],
            ] as $step)
                <article class="about-timeline-step stagger-item">
                    <span class="about-timeline-icon">
                        <span class="material-symbols-outlined">{{ $step['icon'] }}</span>
                    </span>
                    <div>
                        <h3>{{ $step['number'] }}. {{ $step['title'] }}</h3>
                        <p>{{ $step['description'] }}</p>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>
