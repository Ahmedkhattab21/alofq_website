<section id="services" class="py-stack-section bg-white">
    <div class="container mx-auto px-margin-desktop text-center mb-16 reveal">
        <h2 class="font-display-lg text-display-lg text-primary mb-4 stagger-item">خدماتنا التقنية</h2>
        <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl mx-auto stagger-item">
            مجموعة متكاملة من الخدمات البرمجية المصممة لتغطية كافة احتياجات مشروعك الرقمي
        </p>
    </div>

    <div class="container mx-auto px-margin-desktop reveal">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-gutter stagger-item">
            @foreach ($services as $service)
                <x-service-card
                    :icon="$service->icon"
                    :title="$service->title"
                    :description="$service->short_description"
                />
            @endforeach
        </div>
    </div>
</section>
