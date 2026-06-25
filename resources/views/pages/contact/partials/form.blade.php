<section class="forms-section forms-panel-section">
    <div class="container mx-auto px-margin-desktop">
        <div class="forms-panel reveal">
            <h2>أرسل لنا رسالة</h2>
            <x-form-alerts/>

            <form method="POST" action="{{ route('contact.store') }}" class="forms-grid-fields">
                @csrf

                <label>
                    الاسم الكامل
                    <input name="name" value="{{ old('name') }}" required maxlength="100" autocomplete="name">
                </label>

                <label>
                    رقم الهاتف
                    <input name="phone" value="{{ old('phone') }}" required maxlength="30" autocomplete="tel" dir="ltr">
                </label>

                <label>
                    البريد الإلكتروني
                    <input type="email" name="email" value="{{ old('email') }}" required maxlength="150" autocomplete="email" dir="ltr">
                </label>

                <label>
                    الخدمة المطلوبة
                    <select name="service" required>
                        <option value="">اختر الخدمة</option>
                        @foreach([
                            'web' => 'تطوير موقع',
                            'mobile' => 'تطبيق جوال',
                            'systems' => 'نظام إداري',
                            'design' => 'تصميم UI/UX',
                            'cloud' => 'حلول سحابية',
                            'support' => 'دعم وصيانة',
                            'other' => 'أخرى',
                        ] as $value => $label)
                            <option value="{{ $value }}" @selected(old('service') === $value)>{{ $label }}</option>
                        @endforeach
                    </select>
                </label>

                <label class="md:col-span-2">
                    الميزانية المتوقعة
                    <input name="budget" value="{{ old('budget') }}" maxlength="100">
                </label>

                <label class="md:col-span-2">
                    تفاصيل الرسالة
                    <textarea name="message" rows="5" required maxlength="3000" data-character-field>{{ old('message') }}</textarea>
                    <small data-character-count>0 / 3000</small>
                </label>

                <button class="md:col-span-2 brand-gradient text-white" type="submit">
                    إرسال الرسالة
                    <span class="material-symbols-outlined">send</span>
                </button>
            </form>
        </div>
    </div>
</section>
