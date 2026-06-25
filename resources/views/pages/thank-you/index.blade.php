@extends('layouts.app')
@section('title','شكرًا لك | شركة الأفق المتعدد لتقنية المعلومات')
@push('styles')<link rel="stylesheet" href="{{ asset('assets/css/state-pages.css') }}">@endpush
@section('content')@include('partials.header')
@php $isQuote = session('submission') === 'quote'; @endphp
<main class="state-page"><section class="state-card reveal">
<div class="success-rings"><span></span><span></span><i class="material-symbols-outlined">check</i></div>
<span class="state-kicker">تم الإرسال بنجاح</span><h1>شكرًا لك</h1>
<p>{{ $isQuote ? 'استلمنا طلب عرض السعر، وسيقوم فريقنا بمراجعة تفاصيل المشروع والتواصل معك قريبًا.' : 'استلمنا رسالتك، وسيقوم أحد أعضاء فريق الأفق بالتواصل معك في أقرب وقت.' }}</p>
<div class="state-steps"><div><strong>01</strong><span>مراجعة الطلب</span></div><div><strong>02</strong><span>التواصل معك</span></div><div><strong>03</strong><span>الخطوة التالية</span></div></div>
<div class="state-actions"><a href="{{ route('home') }}" class="brand-gradient text-white">العودة للرئيسية</a><a href="{{ route('portfolio') }}">مشاهدة أعمالنا</a></div>
</section></main>@include('partials.footer')@endsection
