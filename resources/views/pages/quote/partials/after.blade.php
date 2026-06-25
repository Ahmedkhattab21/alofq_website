<section class="forms-section quote-steps-section">
    <div class="container mx-auto px-margin-desktop">
        <header class="forms-heading reveal">
            <span class="section-kicker">رحلة واضحة وبسيطة</span>
            <h2>ماذا يحدث بعد إرسال الطلب؟</h2>
            <p>أربع خطوات منظمة تفصل بين فكرتك وبدء التنفيذ.</p>
        </header>

        <div class="after-grid reveal">
            @foreach([
                ['01', 'mark_email_read', 'استلام الطلب', 'نراجع البيانات والتفاصيل التي أرسلتها.'],
                ['02', 'phone_in_talk', 'مكالمة تعريفية', 'نتواصل معك لفهم أهداف المشروع بدقة.'],
                ['03', 'description', 'العرض الفني والمالي', 'نرسل خطة التنفيذ والمدة والتكلفة المقترحة.'],
                ['04', 'rocket_launch', 'بدء التنفيذ', 'ننطلق في العمل بعد اعتماد العرض.'],
            ] as $step)
                <article class="stagger-item">
                    <small>{{ $step[0] }}</small>
                    <span class="material-symbols-outlined">{{ $step[1] }}</span>
                    <h3>{{ $step[2] }}</h3>
                    <p>{{ $step[3] }}</p>
                </article>
            @endforeach
        </div>
    </div>
</section>

<section class="forms-section quote-benefits-section">
    <div class="container mx-auto px-margin-desktop">
        <header class="forms-heading reveal">
            <span class="section-kicker">شراكة تقنية حقيقية</span>
            <h2>لماذا تبدأ مشروعك معنا؟</h2>
            <p>نوازن بين جودة المنتج وسرعة التنفيذ وقابلية التطوير على المدى الطويل.</p>
        </header>

        <div class="quote-benefits reveal">
            @foreach([
                ['analytics', 'تحليل احترافي', 'نفهم نشاطك والسوق قبل اختيار الحل التقني.'],
                ['account_tree', 'بنية قابلة للتوسع', 'نبني مشروعك ليستوعب نمو أعمالك مستقبلًا.'],
                ['code', 'تقنيات حديثة', 'نستخدم أدوات موثوقة ومناسبة لطبيعة كل مشروع.'],
                ['shield_lock', 'أمان وخصوصية', 'نطبّق أفضل الممارسات لحماية بياناتك ومنتجك.'],
                ['speed', 'أداء سريع', 'نهتم بتجربة المستخدم والسرعة على مختلف الأجهزة.'],
                ['handshake', 'تواصل مستمر', 'تبقى على اطلاع كامل بتقدم العمل ومراحله.'],
            ] as $benefit)
                <article class="stagger-item">
                    <span class="material-symbols-outlined">{{ $benefit[0] }}</span>
                    <div>
                        <h3>{{ $benefit[1] }}</h3>
                        <p>{{ $benefit[2] }}</p>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>
