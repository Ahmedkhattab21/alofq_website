@extends('layouts.app')

@section('title', 'اطلب عرض سعر | شركة الأفق المتعدد لتقنية المعلومات')
@section('description', 'شاركنا تفاصيل مشروعك واحصل على عرض سعر واضح وخطة تنفيذ مناسبة من فريق شركة الأفق المتعدد لتقنية المعلومات.')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/forms.css') }}">
@endpush

@section('content')
    @include('partials.header')

    <main class="forms-page quote-page">
        <section class="quote-hero">
            <div class="quote-hero__grid" aria-hidden="true"></div>
            <span class="quote-hero__shape quote-hero__shape--one" aria-hidden="true"></span>
            <span class="quote-hero__shape quote-hero__shape--two" aria-hidden="true"></span>

            <div class="container mx-auto px-margin-desktop quote-hero__content reveal">
                <span class="forms-kicker">لنحوّل فكرتك إلى واقع</span>
                <h1>اطلب عرض سعر</h1>
                <p>
                    أخبرنا عن مشروعك واحتياجاتك، وسيقوم فريقنا بدراسة التفاصيل والتواصل معك
                    بعرض تقني ومالي واضح يناسب أهدافك.
                </p>
                <a href="#quote-form" class="quote-hero__button brand-gradient text-white">
                    ابدأ الآن
                    <span class="material-symbols-outlined">arrow_downward</span>
                </a>
            </div>
        </section>

        @include('pages.quote.partials.form')
        @include('pages.quote.partials.after')
        <x-shared-cta />
    </main>

    @include('partials.footer')
@endsection

@push('scripts')
    <script src="{{ asset('assets/js/forms.js') }}" defer></script>
@endpush
