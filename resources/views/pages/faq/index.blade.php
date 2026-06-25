@extends('layouts.app')
@section('title','الأسئلة الشائعة | شركة الأفق المتعدد لتقنية المعلومات')
@push('styles')<link rel="stylesheet" href="{{ asset('assets/css/legal.css') }}">@endpush
@section('content')@include('partials.header')
<main class="legal-page"><section class="faq-hero"><div class="legal-grid"></div><div class="container mx-auto px-margin-desktop relative z-10 text-center reveal"><span class="legal-kicker">مركز المساعدة</span><h1>الأسئلة الشائعة</h1><p>إجابات واضحة عن الخدمات وطريقة العمل والتكلفة والدعم.</p><label class="faq-search"><span class="material-symbols-outlined">search</span><input type="search" placeholder="ابحث في الأسئلة..." data-faq-search></label></div></section>
@include('pages.faq.partials.questions')
<x-shared-cta />
</main>@include('partials.footer')@endsection
@push('scripts')<script src="{{ asset('assets/js/legal.js') }}" defer></script>@endpush
