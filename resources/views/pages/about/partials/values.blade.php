@php
    $values = [
        ['icon' => 'verified', 'title' => 'الجودة'],
        ['icon' => 'lightbulb', 'title' => 'الابتكار'],
        ['icon' => 'handshake', 'title' => 'الالتزام'],
        ['icon' => 'shield', 'title' => 'الأمان'],
        ['icon' => 'visibility', 'title' => 'الشفافية'],
        ['icon' => 'trending_up', 'title' => 'التطوير'],
    ];
@endphp

<section class="about-section bg-white">
    <header class="about-heading reveal">
        <h2>قيمنا الجوهرية</h2>
        <p>المبادئ التي تحرك كل سطر برمجي نكتبه في الأفق</p>
    </header>

    <div class="container mx-auto px-margin-desktop grid grid-cols-2 md:grid-cols-3 gap-gutter reveal">
        @foreach ($values as $value)
            <article class="about-value-card stagger-item">
                <span class="material-symbols-outlined">{{ $value['icon'] }}</span>
                <h3>{{ $value['title'] }}</h3>
                <i aria-hidden="true"></i>
            </article>
        @endforeach
    </div>
</section>
