@php
    $highlights = [
        ['icon' => 'rocket_launch', 'title' => 'سرعة التنفيذ', 'description' => 'نلتزم بأعلى معايير السرعة في تسليم المشاريع دون المساس بجودة الكود البرمجي.'],
        ['icon' => 'shield_with_heart', 'title' => 'أمان البيانات', 'description' => 'أنظمتنا مشفرة بأحدث بروتوكولات الأمان العالمية لضمان حماية معلومات مؤسستك.'],
        ['icon' => 'auto_awesome', 'title' => 'ابتكار مستمر', 'description' => 'نواكب أحدث التوجهات التقنية لنقدم لك حلولاً سابقة لعصرها تمنحك ميزة تنافسية.'],
    ];
@endphp

<section class="py-stack-section bg-white">
    <div class="container mx-auto px-margin-desktop text-center mb-16 reveal">
        <h2 class="font-display-lg text-display-lg text-primary mb-4 stagger-item">ما يميزنا</h2>
        <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl mx-auto stagger-item">
            نضع الجودة والأمان والابتكار في صميم كل مشروع نقدمه
        </p>
        <div class="w-24 h-1 brand-gradient mx-auto mt-6 rounded-full stagger-item"></div>
    </div>

    <div class="container mx-auto px-margin-desktop reveal">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-gutter">
            @foreach ($highlights as $highlight)
                <article class="p-8 bg-white rounded-2xl shadow-sm border border-outline-variant/20 hover-float group stagger-item">
                    <div class="w-16 h-16 rounded-xl bg-surface-container flex items-center justify-center mb-6 transition-colors group-hover:bg-primary-container">
                        <span class="material-symbols-outlined text-4xl text-primary group-hover:text-white transition-colors">
                            {{ $highlight['icon'] }}
                        </span>
                    </div>
                    <h2 class="font-headline-lg text-headline-lg mb-4 text-primary">{{ $highlight['title'] }}</h2>
                    <p class="font-body-md text-body-md text-on-surface-variant">{{ $highlight['description'] }}</p>
                </article>
            @endforeach
        </div>
    </div>
</section>
