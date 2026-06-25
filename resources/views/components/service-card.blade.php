@props(['icon', 'title', 'description'])

<article class="p-8 bg-white rounded-3xl border border-outline-variant/10 hover:border-secondary/20 transition-all duration-300 group hover-float mb-4">
    <div class="w-12 h-12 rounded-full brand-gradient flex items-center justify-center mb-6 opacity-80 group-hover:opacity-100 transition-opacity">
        <span class="material-symbols-outlined text-white">{{ $icon }}</span>
    </div>
    <h3 class="font-title-md text-title-md mb-2 text-primary">{{ $title }}</h3>
    <p class="font-body-md text-body-md text-on-surface-variant">{{ $description }}</p>
</article>
