@extends('layouts.app')
@section('title', 'أعمالنا | شركة الأفق المتعدد لتقنية المعلومات')
@push('styles')<link rel="stylesheet" href="{{ asset('assets/css/showcase.css') }}">@endpush
@section('content')
@include('partials.header')
<main class="showcase-page">
    <section class="showcase-hero">
        <div class="showcase-grid"></div>
        <div class="container mx-auto px-margin-desktop relative z-10 text-center reveal">
            <span class="showcase-kicker">قصص نجاح رقمية</span>
            <h1>أعمالنا</h1>
            <p>نفتخر بتنفيذ حلول رقمية متنوعة تساعد الشركات على النمو وتحسين الأداء وتقديم تجربة أفضل لعملائها.</p>
            <a href="{{ route('quote') }}" class="brand-gradient text-white">ابدأ مشروعك معنا</a>
        </div>
    </section>
    @include('pages.portfolio.partials.projects')
    @include('pages.portfolio.partials.featured')
    @include('pages.portfolio.partials.process')
    @include('partials.company-stats')
    <x-shared-cta />
</main>
@include('partials.footer')
@endsection
@push('scripts')<script src="{{ asset('assets/js/showcase.js') }}" defer></script>@endpush
