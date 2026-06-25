@extends('layouts.app')

@section('title', 'تواصل معنا | شركة الأفق المتعدد لتقنية المعلومات')
@section('description', 'تواصل مع شركة الأفق المتعدد لتقنية المعلومات لمناقشة مشروعك أو الحصول على استشارة تقنية.')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/forms.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/contact.css') }}">
@endpush

@section('content')
    @include('partials.header')

    <main class="forms-page contact-page">
        <section class="forms-hero">
            <div class="forms-grid"></div>
            <div class="container mx-auto px-margin-desktop relative z-10 text-center reveal">
                <span class="forms-kicker">نحن قريبون منك</span>
                <h1>تواصل معنا</h1>
                <p>
                    يسعدنا الاستماع إلى أفكارك والإجابة عن استفساراتك ومساعدتك
                    في اختيار الحل التقني الأنسب.
                </p>
            </div>
        </section>

        @include('pages.contact.partials.info')
        @include('pages.contact.partials.form')
        @include('pages.contact.partials.location')
        <x-shared-cta />
    </main>

    @include('partials.footer')
@endsection

@push('scripts')
    <script src="{{ asset('assets/js/forms.js') }}" defer></script>
@endpush
