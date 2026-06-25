<section class="py-24 brand-gradient text-white">
    <div class="container mx-auto px-margin-desktop grid grid-cols-2 md:grid-cols-4 gap-gutter text-center reveal">
        @foreach ($companyStats as $stat)
            <div class="stagger-item">
                <div class="text-5xl font-bold mb-2 counter" data-target="{{ $stat->value }}">0</div>
                <p class="font-body-md opacity-90">{{ $stat->label }}{{ $stat->suffix }}</p>
            </div>
        @endforeach
    </div>
</section>
