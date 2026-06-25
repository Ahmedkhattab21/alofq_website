@props(['id' => null])

<section @if($id) id="{{ $id }}" @endif class="shared-cta-section">
    <div class="container mx-auto px-margin-desktop">
        <div class="shared-cta reveal">
            <span class="shared-cta__top-line" aria-hidden="true"></span>
            <span class="shared-cta__circle" aria-hidden="true"></span>

            <div class="shared-cta__content stagger-item">
                <h2>جاهز تبدأ مشروعك الرقمي؟</h2>
                <p>
                    اترك لنا التفاصيل وسيقوم أحد خبرائنا في الأفق بالتواصل معك لمناقشة كيف يمكننا تحويل رؤيتك إلى واقع ملموس.
                </p>
                <a href="{{ route('quote') }}" class="brand-gradient text-white btn-pulse">
                    احصل على استشارة مجانية
                </a>
            </div>
        </div>
    </div>
</section>
