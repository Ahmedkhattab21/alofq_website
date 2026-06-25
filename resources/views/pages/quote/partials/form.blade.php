@php
    $projectTypes = [
        'app' => ['phone_iphone', 'تطبيق جوال'],
        'web' => ['language', 'موقع إلكتروني'],
        'system' => ['dashboard', 'نظام إداري'],
        'ux' => ['design_services', 'تصميم UI/UX'],
        'ai' => ['psychology', 'ذكاء اصطناعي'],
        'other' => ['add_circle', 'حل آخر'],
    ];

    $budgets = [
        'starter' => ['أقل من 20 ألف', 'للمشروعات الصغيرة والبدايات'],
        'growth' => ['20 - 50 ألف', 'للمشروعات المتوسطة والمتطورة'],
        'enterprise' => ['أكثر من 50 ألف', 'للمنصات والحلول المتكاملة'],
    ];
@endphp

<section id="quote-form" class="forms-section quote-form-section">
    <div class="container mx-auto px-margin-desktop">
        <div class="quote-layout">
            <aside class="quote-aside reveal">
                <span class="quote-aside__eyebrow">نحن معك من البداية</span>
                <h2>لماذا الأفق؟</h2>
                <p>نحوّل احتياجك إلى خطة عمل واضحة، ونبقى معك حتى الإطلاق وما بعده.</p>

                <div class="quote-aside__features">
                    @foreach([
                        ['verified_user', 'جودة موثوقة', 'معايير تطوير واختبار دقيقة'],
                        ['schedule', 'التزام بالمواعيد', 'خطة زمنية واضحة لكل مرحلة'],
                        ['support_agent', 'دعم مستمر', 'متابعة تقنية بعد التسليم'],
                    ] as $feature)
                        <div class="quote-aside__feature stagger-item">
                            <span class="material-symbols-outlined">{{ $feature[0] }}</span>
                            <div>
                                <strong>{{ $feature[1] }}</strong>
                                <small>{{ $feature[2] }}</small>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="quote-aside__contact">
                    <span class="material-symbols-outlined">call</span>
                    <div>
                        <small>تفضل التواصل المباشر؟</small>
                        <a href="tel:0500141072" dir="ltr">0500141072</a>
                    </div>
                </div>
            </aside>

            <div class="forms-panel reveal">
                <div class="forms-panel__heading">
                    <span class="material-symbols-outlined">edit_note</span>
                    <div>
                        <h2>تفاصيل مشروعك</h2>
                        <p>املأ البيانات التالية وسنتواصل معك في أقرب وقت.</p>
                    </div>
                </div>

                <x-form-alerts/>

                <form method="POST" action="{{ route('quote.store') }}" class="forms-grid-fields" data-quote-form>
                    @csrf

                    <label>
                        <span>الاسم الكامل <b>*</b></span>
                        <span class="field-control">
                            <span class="material-symbols-outlined">person</span>
                            <input name="name" value="{{ old('name') }}" placeholder="اكتب اسمك الكامل" required maxlength="100">
                        </span>
                    </label>

                    <label>
                        <span>رقم الهاتف <b>*</b></span>
                        <span class="field-control">
                            <span class="material-symbols-outlined">call</span>
                            <input name="phone" value="{{ old('phone') }}" placeholder="05xxxxxxxx" required maxlength="30" dir="ltr">
                        </span>
                    </label>

                    <label>
                        <span>البريد الإلكتروني <b>*</b></span>
                        <span class="field-control">
                            <span class="material-symbols-outlined">mail</span>
                            <input type="email" name="email" value="{{ old('email') }}" placeholder="name@example.com" required maxlength="150" dir="ltr">
                        </span>
                    </label>

                    <label>
                        <span>اسم الشركة</span>
                        <span class="field-control">
                            <span class="material-symbols-outlined">business</span>
                            <input name="company" value="{{ old('company') }}" placeholder="اسم الشركة أو الجهة" maxlength="150">
                        </span>
                    </label>

                    <fieldset class="form-wide choice-field">
                        <legend>
                            <span>نوع المشروع <b>*</b></span>
                            <small>اختر الخدمة الأقرب إلى احتياجك</small>
                        </legend>
                        <div class="choice-grid">
                            @foreach($projectTypes as $value => $projectType)
                                <label>
                                    <input type="radio" name="project_type" value="{{ $value }}" @checked(old('project_type') === $value) required>
                                    <span>
                                        <i class="material-symbols-outlined">{{ $projectType[0] }}</i>
                                        {{ $projectType[1] }}
                                    </span>
                                </label>
                            @endforeach
                        </div>
                    </fieldset>

                    <fieldset class="form-wide choice-field">
                        <legend>
                            <span>الميزانية التقريبية <b>*</b></span>
                            <small>يساعدنا ذلك في اقتراح الحل الأنسب</small>
                        </legend>
                        <div class="choice-grid choice-grid--three">
                            @foreach($budgets as $value => $budget)
                                <label>
                                    <input type="radio" name="budget" value="{{ $value }}" @checked(old('budget') === $value) required>
                                    <span>
                                        <strong>{{ $budget[0] }}</strong>
                                        <small>{{ $budget[1] }}</small>
                                    </span>
                                </label>
                            @endforeach
                        </div>
                    </fieldset>

                    <label class="form-wide">
                        <span>تفاصيل المشروع <b>*</b></span>
                        <textarea name="details" rows="6" required maxlength="4000" data-character-field placeholder="حدثنا عن الفكرة، الأهداف، الخصائص المطلوبة، والفئة المستهدفة...">{{ old('details') }}</textarea>
                        <small class="character-count" data-character-count>0 / 4000</small>
                    </label>

                    <div class="form-wide quote-form__privacy">
                        <span class="material-symbols-outlined">lock</span>
                        بياناتك آمنة لدينا ولن تتم مشاركتها مع أي طرف آخر.
                    </div>

                    <button class="form-wide brand-gradient text-white" type="submit">
                        <span>إرسال طلب عرض السعر</span>
                        <span class="material-symbols-outlined">arrow_back</span>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
