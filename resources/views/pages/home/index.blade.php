@extends('layouts.app')

@section('title', 'شركة الأفق المتعدد لتقنية المعلومات | حلول برمجية تقود أعمالك نحو المستقبل')
@section('description', 'نبتكر تجارب رقمية وحلولاً برمجية متكاملة تساعد الشركات على النمو والتحول الرقمي.')

@section('content')
    @include('partials.header')

    <main>
        @include('pages.home.partials.hero')
        @include('pages.home.partials.highlights')
        @include('pages.home.partials.services')
        @include('pages.home.partials.why-us')
        @include('pages.home.partials.journey')
        @include('pages.home.partials.business-solutions')
        @include('partials.company-stats')
        @include('pages.home.partials.portfolio')
        @include('pages.home.partials.partners')
        @include('pages.home.partials.clients')
        @include('pages.home.partials.contact')
    </main>

    @include('partials.footer')
@endsection
