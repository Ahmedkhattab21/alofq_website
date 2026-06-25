@props([
    'name',
    'label' => null,
    'icon' => 'hub',
    'variant' => 'client',
])

<article {{ $attributes->class([
    'brand-logo-card',
    'brand-logo-card--partner' => $variant === 'partner',
    'brand-logo-card--client' => $variant === 'client',
]) }}>
    <div class="brand-logo-card__inner">
        <div class="brand-logo-mark" aria-hidden="true">
            <span class="material-symbols-outlined">{{ $icon }}</span>
        </div>

        <div class="min-w-0">
            <h3 class="brand-logo-name">{{ $name }}</h3>

            @if ($label)
                <span class="brand-logo-label">{{ $label }}</span>
            @endif
        </div>
    </div>
</article>
