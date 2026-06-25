<footer class="bg-white pt-stack-section pb-8 border-t border-outline-variant/10">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-gutter px-margin-desktop max-w-container-max mx-auto text-right reveal">
        <div class="sm:col-span-2 lg:col-span-1 stagger-item">
            <img src="{{ asset('assets/images/alofq-logo.png') }}"
                 alt="شعار شركة الأفق المتعدد لتقنية المعلومات"
                 class="h-20 w-auto object-contain mb-6">
            <p class="font-body-md text-body-md text-on-surface-variant mb-8">
                شريكك الاستراتيجي في رحلة التحول الرقمي والابتكار التقني. حلول "الأفق" تفتح لك آفاقاً جديدة من النجاح.
            </p>
        </div>

        <div class="stagger-item">
            <h3 class="font-title-md text-title-md mb-6 text-primary">صفحات الموقع</h3>
            <ul class="space-y-4">
                <li><a class="text-on-surface-variant hover:text-secondary transition-colors font-body-md" href="{{ route('home') }}">الرئيسية</a></li>
                <li><a class="text-on-surface-variant hover:text-secondary transition-colors font-body-md" href="{{ route('services') }}">خدماتنا</a></li>
                <li><a class="text-on-surface-variant hover:text-secondary transition-colors font-body-md" href="{{ route('portfolio') }}">أعمالنا</a></li>
                <li><a class="text-on-surface-variant hover:text-secondary transition-colors font-body-md" href="{{ route('technologies') }}">التقنيات</a></li>
            </ul>
        </div>

        <div class="stagger-item">
            <h3 class="font-title-md text-title-md mb-6 text-primary">الشركة</h3>
            <ul class="space-y-4">
                <li><a class="text-on-surface-variant hover:text-secondary transition-colors font-body-md" href="{{ route('about') }}">من نحن</a></li>
                <li><a class="text-on-surface-variant hover:text-secondary transition-colors font-body-md" href="{{ route('partners') }}">شركاؤنا</a></li>
                <li><a class="text-on-surface-variant hover:text-secondary transition-colors font-body-md" href="{{ route('clients') }}">عملاؤنا</a></li>
                <li><a class="text-on-surface-variant hover:text-secondary transition-colors font-body-md" href="{{ route('contact') }}">تواصل معنا</a></li>
            </ul>
        </div>

        <div class="stagger-item">
            <h3 class="font-title-md text-title-md mb-6 text-primary">الدعم</h3>
            <ul class="space-y-4">
                <li><a class="text-on-surface-variant hover:text-secondary transition-colors font-body-md" href="{{ route('privacy') }}">سياسة الخصوصية</a></li>
                <li><a class="text-on-surface-variant hover:text-secondary transition-colors font-body-md" href="{{ route('terms') }}">الشروط والأحكام</a></li>
                <li><a class="text-on-surface-variant hover:text-secondary transition-colors font-body-md" href="{{ route('faq') }}">الأسئلة الشائعة</a></li>
                <li><a class="text-on-surface-variant hover:text-secondary transition-colors font-body-md" href="{{ route('quote') }}">اطلب عرض سعر</a></li>
            </ul>
        </div>

        <div class="stagger-item">
            <h3 class="font-title-md text-title-md mb-6 text-primary">تواصل معنا</h3>
            <a href="https://maps.app.goo.gl/EJrYBkYvZ1rVUX1D6?g_st=ic"
               target="_blank"
               rel="noopener"
               class="block text-on-surface-variant hover:text-secondary transition-colors font-body-md mb-4">
                موقعنا على Google Maps
            </a>
            <a href="tel:0500141072" class="block font-title-md text-secondary font-bold mb-3">0500141072</a>
            <a href="mailto:dev@alofq.sa" class="text-on-surface-variant hover:text-secondary transition-colors font-body-md">
                dev@alofq.sa
            </a>
        </div>
    </div>

    <div class="mt-20 pt-8 border-t border-outline-variant/10 text-center px-margin-desktop max-w-container-max mx-auto reveal">
        <p class="font-body-md text-body-md text-on-surface-variant stagger-item">
            © {{ date('Y') }} شركة الأفق المتعدد لتقنية المعلومات. جميع الحقوق محفوظة.
        </p>
    </div>
</footer>
