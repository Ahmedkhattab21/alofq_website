<section id="portfolio" class="py-stack-section bg-white">
    <div class="container mx-auto px-margin-desktop mb-12 flex flex-col sm:flex-row justify-between items-start sm:items-end gap-6 reveal">
        <div class="text-right stagger-item">
            <h2 class="font-display-lg text-display-lg mb-2 text-primary">أعمالنا المميزة</h2>
            <p class="font-body-md text-body-md text-on-surface-variant">قصص نجاح سطرناها مع شركائنا في شركة الأفق المتعدد</p>
        </div>
        <a href="{{ route('portfolio') }}" class="text-primary font-bold border-b-2 border-primary hover:text-secondary hover:border-secondary transition-all stagger-item">
            مشاهدة الكل
        </a>
    </div>

    <div class="container mx-auto px-margin-desktop grid grid-cols-1 md:grid-cols-3 gap-gutter reveal">
        @foreach ($projects as $project)
            <x-portfolio-card
                :image="$project->image"
                :title="$project->title"
                :description="$project->description"
            />
        @endforeach
    </div>
</section>
