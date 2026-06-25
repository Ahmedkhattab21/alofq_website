@extends('layouts.app')
@section('title','عملاؤنا | شركة الأفق المتعدد لتقنية المعلومات')
@push('styles')<link rel="stylesheet" href="{{ asset('assets/css/showcase.css') }}">@endpush
@section('content')@include('partials.header')
<main class="showcase-page"><section class="showcase-hero"><div class="showcase-grid"></div><div class="container mx-auto px-margin-desktop relative z-10 text-center reveal"><span class="showcase-kicker">ثقة نعتز بها</span><h1>عملاؤنا</h1><p>شركاء نجاح من قطاعات متنوعة اختاروا الأفق لبناء حلول رقمية تدعم نمو أعمالهم.</p></div></section>
@include('pages.home.partials.clients')
<section class="showcase-featured"><div class="container mx-auto px-margin-desktop"><header class="showcase-heading reveal"><h2>قطاعات نخدمها</h2><p>خبرة مرنة تلائم نماذج الأعمال المختلفة.</p></header><div class="showcase-values reveal">@foreach([['storefront','التجارة الإلكترونية'],['school','التعليم'],['domain','قطاع الأعمال'],['medical_services','الصحة'],['local_shipping','الخدمات اللوجستية'],['rocket_launch','الشركات الناشئة']] as $v)<article class="stagger-item"><span class="material-symbols-outlined">{{ $v[0] }}</span><h3>{{ $v[1] }}</h3></article>@endforeach</div></div></section>
@include('partials.company-stats')<x-shared-cta /></main>
@include('partials.footer')@endsection
