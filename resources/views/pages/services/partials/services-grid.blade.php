<section id="all-services" class="services-section bg-white">
    <header class="services-heading reveal">
        <h2>حلول تقنية متكاملة لأعمالك</h2>
        <p>نبتكر، نصمم، ونطور كل ما يحتاجه مشروعك للنجاح في الفضاء الرقمي</p>
        <span></span>
    </header>

    <div class="container mx-auto px-margin-desktop grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-gutter reveal">
        @foreach ($services as $service)
            <article class="services-card stagger-item" data-tilt-card>
                <div class="services-card-glow" aria-hidden="true"></div>
                <span class="material-symbols-outlined services-card-icon">{{ $service->icon }}</span>
                <h3>{{ $service->title }}</h3>
                <p>{{ $service->description }}</p>
                <span class="services-card-accent" aria-hidden="true"></span>
            </article>
        @endforeach
    </div>
</section>
