@extends('layouts.app')
@section('title','شركاؤنا | شركة الأفق المتعدد لتقنية المعلومات')
@push('styles')<link rel="stylesheet" href="{{ asset('assets/css/showcase.css') }}">@endpush
@section('content')@include('partials.header')
<main class="showcase-page"><section class="showcase-hero"><div class="showcase-grid"></div><div class="container mx-auto px-margin-desktop relative z-10 text-center reveal"><span class="showcase-kicker">شراكات تصنع النجاح</span><h1>شركاؤنا</h1><p>نبني منظومة متكاملة من الشراكات التقنية والاستراتيجية لتقديم حلول أكثر قوة وموثوقية.</p></div></section>
@include('pages.home.partials.partners')
<section class="showcase-featured"><div class="container mx-auto px-margin-desktop"><header class="showcase-heading reveal"><h2>لماذا نتشارك؟</h2><p>خبرات متكاملة، وصول أسرع للتقنيات، وجودة أعلى في كل مشروع.</p></header><div class="showcase-values reveal">@foreach([['hub','تكامل تقني'],['verified','جودة موثوقة'],['rocket_launch','نمو مشترك']] as $v)<article class="stagger-item"><span class="material-symbols-outlined">{{ $v[0] }}</span><h3>{{ $v[1] }}</h3></article>@endforeach</div></div></section>
@include('partials.company-stats')<x-shared-cta /></main>
@include('partials.footer')@endsection
