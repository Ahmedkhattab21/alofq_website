@extends('layouts.app')
@section('title','الصفحة غير موجودة | شركة الأفق المتعدد لتقنية المعلومات')
@push('styles')<link rel="stylesheet" href="{{ asset('assets/css/state-pages.css') }}">@endpush
@section('content')@include('partials.header')
<main class="state-page error-state"><section class="state-card">
<div class="error-code" aria-hidden="true"><span>4</span><i class="material-symbols-outlined">travel_explore</i><span>4</span></div>
<span class="state-kicker">عفوًا، حدث خطأ</span><h1>الصفحة غير موجودة</h1><p>ربما تم نقل الصفحة أو تغيير رابطها. يمكنك العودة إلى الرئيسية أو استعراض خدماتنا.</p>
<div class="state-actions"><a href="{{ route('home') }}" class="brand-gradient text-white">العودة للرئيسية</a><a href="{{ route('services') }}">استعراض الخدمات</a></div>
</section></main>@include('partials.footer')@endsection
