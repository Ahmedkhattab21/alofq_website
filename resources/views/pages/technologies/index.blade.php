@extends('layouts.app')
@section('title','التقنيات | شركة الأفق المتعدد لتقنية المعلومات')
@push('styles')<link rel="stylesheet" href="{{ asset('assets/css/technologies.css') }}"><link rel="stylesheet" href="{{ asset('assets/css/technologies-grid.css') }}">@endpush
@section('content')@include('partials.header')
<main class="tech-page"><section class="tech-hero"><div class="tech-grid-bg"></div><div class="container mx-auto px-margin-desktop relative z-10 text-center reveal"><span>تقنيات حديثة، حلول مستقرة</span><h1>التقنيات التي نبني بها</h1><p>نختار الأدوات المناسبة لكل مشروع لتحقيق الأداء والأمان وسهولة التطوير.</p></div></section>
@include('pages.technologies.partials.stack')
<section class="tech-principles"><div class="container mx-auto px-margin-desktop"><header class="tech-heading reveal"><h2>كيف نختار التقنية؟</h2><p>القرار التقني مبني على احتياج المشروع وليس على الموضة.</p></header><div class="tech-principles-grid reveal">@foreach([['speed','الأداء'],['shield_lock','الأمان'],['trending_up','قابلية التوسع'],['build','سهولة الصيانة']] as $p)<article class="stagger-item"><span class="material-symbols-outlined">{{ $p[0] }}</span><h3>{{ $p[1] }}</h3></article>@endforeach</div></div></section>
<x-shared-cta />
</main>@include('partials.footer')@endsection
