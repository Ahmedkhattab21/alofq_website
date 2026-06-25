@extends('layouts.app')

@section('title', 'خدماتنا | شركة الأفق المتعدد لتقنية المعلومات')
@section('description', 'خدمات برمجية وحلول تحول رقمي متكاملة ومخصصة لدعم نمو أعمالك.')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/services.css') }}">
@endpush

@section('content')
    @include('partials.header')

    <main class="services-page">
        @include('pages.services.partials.hero')
        @include('pages.services.partials.services-grid')
        @include('pages.services.partials.custom-solutions')
        @include('pages.services.partials.benefits')
        @include('pages.services.partials.process')
        @include('partials.company-stats')
        @include('pages.services.partials.cta')
    </main>

    @include('partials.footer')
@endsection

@push('scripts')
    <script src="{{ asset('assets/js/services.js') }}" defer></script>
@endpush
