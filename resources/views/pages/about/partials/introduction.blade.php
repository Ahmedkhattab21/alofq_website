@php
    $advantages = [
        ['icon' => 'architecture', 'title' => 'حلول مخصصة', 'description' => 'نصمم البرمجيات لتناسب احتياجات عملك الفريدة، مما يضمن أقصى قدر من الكفاءة والنمو.', 'tone' => 'secondary'],
        ['icon' => 'precision_manufacturing', 'title' => 'تنفيذ احترافي', 'description' => 'فريقنا يتبع أدق المعايير العالمية في التطوير والبرمجة لضمان جودة استثنائية.', 'tone' => 'primary'],
        ['icon' => 'support_agent', 'title' => 'دعم مستمر', 'description' => 'شراكتنا تبدأ بعد الإطلاق، نحن هنا دائماً لضمان استقرار وتطور منصاتك الرقمية.', 'tone' => 'tertiary'],
    ];
@endphp

<section class="about-section bg-white">
    <header class="about-heading reveal">
        <h2>نبتكر حلولاً رقمية تناسب طموحك</h2>
        <span class="about-heading-line"></span>
    </header>

    <div class="container mx-auto px-margin-desktop grid grid-cols-1 md:grid-cols-3 gap-gutter">
        @foreach ($advantages as $advantage)
            <article class="about-advantage about-advantage--{{ $advantage['tone'] }} reveal hover-lift">
                <div class="about-icon-box">
                    <span class="material-symbols-outlined">{{ $advantage['icon'] }}</span>
                </div>
                <h3>{{ $advantage['title'] }}</h3>
                <p>{{ $advantage['description'] }}</p>
            </article>
        @endforeach
    </div>
</section>
