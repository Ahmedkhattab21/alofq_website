@props(['image', 'title', 'description'])

<article class="relative group overflow-hidden rounded-3xl aspect-[4/5] shadow-lg stagger-item">
    <img src="{{ asset($image) }}"
         alt="{{ $title }}"
         loading="lazy"
         class="absolute inset-0 h-full w-full object-cover group-hover:scale-110 transition-transform duration-700">
    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex flex-col justify-end p-8 text-white text-right">
        <h3 class="text-2xl font-bold mb-2">{{ $title }}</h3>
        <p class="text-sm opacity-80">{{ $description }}</p>
    </div>
</article>
