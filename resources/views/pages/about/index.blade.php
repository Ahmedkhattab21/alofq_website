@extends('layouts.app')

@section('title', 'من نحن | شركة الأفق المتعدد لتقنية المعلومات')
@section('description', 'تعرف على رؤية ورسالة وقيم شركة الأفق المتعدد لتقنية المعلومات ورحلتنا في تطوير الحلول الرقمية.')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/about.css') }}">
@endpush

@section('content')
    @include('partials.header')

    <main class="about-page">
        @include('pages.about.partials.hero')
        @include('pages.about.partials.introduction')
        @include('pages.about.partials.vision-mission')
        @include('pages.about.partials.values')
        @include('pages.about.partials.journey')
        @include('partials.company-stats')
        @include('pages.about.partials.cta')
    </main>

    @include('partials.footer')
@endsection

@push('scripts')
    <script src="{{ asset('assets/js/about.js') }}" defer></script>
@endpush
