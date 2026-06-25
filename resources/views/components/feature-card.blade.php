@props(['icon', 'title', 'description'])

<article class="bg-white p-8 rounded-2xl shadow-sm border border-outline-variant/20 hover-float stagger-item">
    <div class="w-14 h-14 brand-gradient flex items-center justify-center rounded-xl mb-6">
        <span class="material-symbols-outlined text-white text-3xl">{{ $icon }}</span>
    </div>
    <h3 class="font-title-md text-title-md mb-4 text-primary">{{ $title }}</h3>
    <p class="font-body-md text-body-md text-on-surface-variant">{{ $description }}</p>
</article>
