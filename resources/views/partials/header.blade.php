@php
    $moreMenuIsActive = request()->routeIs('partners', 'clients', 'contact', 'privacy', 'faq', 'terms', 'technologies');
    $mobileLinks = [
        ['home', 'home', 'الرئيسية'],
        ['portfolio', 'work', 'أعمالنا'],
        ['services', 'design_services', 'الخدمات'],
        ['about', 'info', 'من نحن'],
        ['partners', 'handshake', 'شركاؤنا'],
        ['clients', 'groups', 'عملاؤنا'],
        ['technologies', 'memory', 'التقنيات'],
        ['contact', 'contact_support', 'تواصل معنا'],
        ['faq', 'help', 'الأسئلة الشائعة'],
        ['privacy', 'privacy_tip', 'سياسة الخصوصية'],
        ['terms', 'gavel', 'الشروط والأحكام'],
    ];
@endphp

<header class="site-header fixed top-0 w-full z-50 glass-nav border-b border-outline-variant/10 h-20 flex items-center">
    <div class="site-header__inner flex justify-between items-center w-full px-margin-desktop max-w-container-max mx-auto">
        <div class="flex items-center gap-8">
            <a class="brand-name flex items-center hover:scale-105 transition-transform"
               href="{{ route('home') }}"
               aria-label="شركة الأفق المتعدد لتقنية المعلومات - الرئيسية">
                <img src="{{ asset('assets/images/alofq-logo.png') }}"
                     alt="شعار شركة الأفق المتعدد لتقنية المعلومات"
                     class="h-14 w-auto object-contain">
            </a>

            <nav class="hidden md:flex gap-8" aria-label="التنقل الرئيسي">
                <a class="{{ request()->routeIs('home') ? 'text-secondary font-bold border-b-2 border-secondary pb-1' : 'text-on-surface-variant hover:text-primary transition-colors' }} font-title-md text-title-md" href="{{ route('home') }}">الرئيسية</a>
                <a class="{{ request()->routeIs('portfolio') ? 'text-secondary font-bold border-b-2 border-secondary pb-1' : 'text-on-surface-variant hover:text-primary transition-colors' }} font-title-md text-title-md" href="{{ route('portfolio') }}">أعمالنا</a>
                <a class="{{ request()->routeIs('services') ? 'text-secondary font-bold border-b-2 border-secondary pb-1' : 'text-on-surface-variant hover:text-primary transition-colors' }} font-title-md text-title-md" href="{{ route('services') }}">الخدمات</a>
                <a class="{{ request()->routeIs('about') ? 'text-secondary font-bold border-b-2 border-secondary pb-1' : 'text-on-surface-variant hover:text-primary transition-colors' }} font-title-md text-title-md" href="{{ route('about') }}">من نحن</a>

                <div class="header-more-menu" data-header-menu>
                    <button type="button"
                            class="header-more-trigger {{ $moreMenuIsActive ? 'is-active' : '' }}"
                            aria-expanded="false"
                            aria-controls="header-more-dialog"
                            data-header-menu-trigger>
                        المزيد
                        <span class="material-symbols-outlined">keyboard_arrow_down</span>
                    </button>

                    <div id="header-more-dialog"
                         class="header-more-dialog"
                         role="dialog"
                         aria-label="صفحات إضافية"
                         hidden
                         data-header-menu-dialog>
                        @foreach(array_slice($mobileLinks, 4) as $link)
                            <a href="{{ route($link[0]) }}" class="{{ request()->routeIs($link[0]) ? 'is-active' : '' }}">
                                <span class="material-symbols-outlined">{{ $link[1] }}</span>
                                <span><strong>{{ $link[2] }}</strong></span>
                            </a>
                        @endforeach
                    </div>
                </div>
            </nav>
        </div>

        <a href="{{ route('quote') }}"
           class="quote-button header-desktop-quote brand-gradient text-white px-8 py-3 rounded-lg font-title-md text-title-md active:scale-95 transition-all btn-pulse {{ request()->routeIs('quote') ? 'is-active' : '' }}"
           @if(request()->routeIs('quote')) aria-current="page" @endif>
            <span class="material-symbols-outlined">request_quote</span>
            <span>اطلب عرض سعر</span>
        </a>

        <button type="button"
                class="mobile-menu-trigger"
                aria-label="فتح قائمة الصفحات"
                aria-expanded="false"
                aria-controls="mobile-navigation"
                data-mobile-menu-trigger>
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>

    <div class="mobile-menu-backdrop" hidden data-mobile-menu-backdrop></div>

    <nav id="mobile-navigation"
         class="mobile-navigation"
         aria-label="قائمة الموبايل"
         hidden
         data-mobile-menu>
        <div class="mobile-navigation__header">
            <strong>صفحات الموقع</strong>
            <button type="button" aria-label="إغلاق القائمة" data-mobile-menu-close>
                <span class="material-symbols-outlined">close</span>
            </button>
        </div>

        <div class="mobile-navigation__links">
            @foreach($mobileLinks as $link)
                <a href="{{ route($link[0]) }}" class="{{ request()->routeIs($link[0]) ? 'is-active' : '' }}">
                    <span class="material-symbols-outlined">{{ $link[1] }}</span>
                    <span>{{ $link[2] }}</span>
                </a>
            @endforeach
        </div>

        <a href="{{ route('quote') }}"
           class="mobile-navigation__quote brand-gradient text-white {{ request()->routeIs('quote') ? 'is-active' : '' }}">
            <span class="material-symbols-outlined">request_quote</span>
            اطلب عرض سعر
        </a>
    </nav>
</header>
