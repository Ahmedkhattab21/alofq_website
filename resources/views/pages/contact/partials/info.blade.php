<section class="forms-section bg-white">
    <div class="container mx-auto px-margin-desktop grid sm:grid-cols-2 lg:grid-cols-4 gap-gutter reveal">
        @foreach([
            ['phone', 'الهاتف', '0500141072', 'tel:0500141072'],
            ['mail', 'البريد الإلكتروني', 'dev@alofq.sa', 'mailto:dev@alofq.sa'],
            ['location_on', 'الموقع', 'موقعنا على Google Maps', 'https://maps.app.goo.gl/EJrYBkYvZ1rVUX1D6?g_st=ic'],
            ['schedule', 'ساعات العمل', 'من 8:30 صباحًا إلى 5:30 مساءً', null],
        ] as $item)
            <article class="contact-info-card stagger-item">
                <span class="material-symbols-outlined">{{ $item[0] }}</span>
                <h2>{{ $item[1] }}</h2>
                @if($item[3])
                    <a href="{{ $item[3] }}" @if(str_starts_with($item[3], 'http')) target="_blank" rel="noopener" @endif>
                        {{ $item[2] }}
                    </a>
                @else
                    <p>{{ $item[2] }}</p>
                @endif
            </article>
        @endforeach
    </div>
</section>
