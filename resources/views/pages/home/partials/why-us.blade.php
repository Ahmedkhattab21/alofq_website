@php
    $features = [
        ['icon' => 'code', 'title' => 'خبرة في تطوير المواقع والتطبيقات', 'description' => 'نمتلك فريقاً من الخبراء المتخصصين في بناء حلول رقمية متطورة تلبي تطلعاتك.'],
        ['icon' => 'settings_suggest', 'title' => 'حلول مخصصة حسب احتياج العميل', 'description' => 'لا نؤمن بالحلول الجاهزة، بل نصمم كل نظام ليتناسب تماماً مع طبيعة عملك.'],
        ['icon' => 'palette', 'title' => 'تصميم واجهات حديثة وسهلة الاستخدام', 'description' => 'نركز على تجربة المستخدم لضمان تفاعل سلس وجذاب مع منصاتك الرقمية.'],
        ['icon' => 'trending_up', 'title' => 'أنظمة قابلة للتوسع', 'description' => 'نبني أنظمتنا لتنمو مع نمو أعمالك، مما يضمن استدامة استثمارك التقني.'],
        ['icon' => 'support_agent', 'title' => 'دعم فني بعد التسليم', 'description' => 'شراكتنا لا تنتهي بالتسليم، نحن معك دائماً لضمان استقرار وتطور أنظمتك.'],
        ['icon' => 'security', 'title' => 'اهتمام بالأمان والأداء', 'description' => 'نطبق أعلى معايير الحماية لضمان سلامة بياناتك وسرعة استجابة أنظمتك.'],
    ];
@endphp

<section id="why-us" class="py-stack-section bg-white">
    <div class="container mx-auto px-margin-desktop text-center mb-16 reveal">
        <h2 class="font-display-lg text-display-lg text-primary mb-4 stagger-item">لماذا تختار الأفق؟</h2>
        <div class="w-24 h-1 brand-gradient mx-auto rounded-full stagger-item"></div>
    </div>

    <div class="container mx-auto px-margin-desktop grid grid-cols-1 md:grid-cols-3 gap-gutter reveal">
        @foreach ($features as $feature)
            <x-feature-card
                :icon="$feature['icon']"
                :title="$feature['title']"
                :description="$feature['description']"
            />
        @endforeach
    </div>
</section>
