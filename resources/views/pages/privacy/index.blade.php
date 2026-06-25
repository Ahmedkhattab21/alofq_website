@extends('layouts.app')
@section('title','سياسة الخصوصية | شركة الأفق المتعدد لتقنية المعلومات')
@push('styles')<link rel="stylesheet" href="{{ asset('assets/css/legal.css') }}"><link rel="stylesheet" href="{{ asset('assets/css/legal-light.css') }}">@endpush
@section('content')
@include('partials.header')
<main class="legal-page">
<section class="legal-hero legal-hero--light"><div class="legal-grid"></div><div class="container mx-auto px-margin-desktop relative z-10 text-center reveal"><span class="legal-kicker">خصوصيتك أولويتنا</span><h1>سياسة الخصوصية</h1><p>التزام واضح بحماية بياناتك وشرح آلية التعامل معها بشفافية.</p><small>آخر تحديث: 25 يونيو 2026</small></div></section>
<section class="legal-content"><div class="container mx-auto px-margin-desktop legal-layout">
<aside class="legal-index reveal"><h2>فهرس السياسة</h2>@foreach(['intro'=>'مقدمة','collection'=>'البيانات التي نجمعها','usage'=>'استخدام البيانات','protection'=>'حماية البيانات','cookies'=>'ملفات الارتباط','rights'=>'حقوقك','contact-privacy'=>'التواصل معنا'] as $id=>$label)<a href="#{{ $id }}">{{ $label }}</a>@endforeach</aside>
<article class="legal-article">
@foreach([
['intro','مقدمة','نلتزم بحماية خصوصية مستخدمي الموقع وعملائنا، ونتعامل مع البيانات الشخصية بمسؤولية ووفق الأغراض الموضحة في هذه السياسة.','privacy_tip'],
['collection','البيانات التي نجمعها','نجمع البيانات التي ترسلها طوعًا عبر نماذج التواصل وعروض الأسعار، بالإضافة إلى بيانات تقنية محدودة لازمة للأمان وتحسين الأداء.','database'],
['usage','استخدام البيانات','تستخدم البيانات للتواصل معك وتحليل احتياجات المشروع وإعداد العروض وتقديم الدعم. لا نقوم ببيع بياناتك الشخصية.','manage_accounts'],
['protection','حماية البيانات','نعتمد ضوابط وصول وإجراءات تقنية وتنظيمية مناسبة للحد من الوصول غير المصرح به أو التغيير أو الفقد.','shield_lock'],
['cookies','ملفات تعريف الارتباط (Cookies)','قد نستخدم ملفات ارتباط ضرورية ووظيفية لتحسين تجربة الموقع، ويمكنك إدارتها من إعدادات متصفحك.','cookie'],
['rights','حقوقك القانونية','يمكنك طلب الاطلاع على بياناتك أو تصحيحها أو حذفها والاعتراض على بعض طرق استخدامها وفق الأنظمة المعمول بها.','verified_user'],
['contact-privacy','التواصل معنا','للاستفسار أو تقديم طلب متعلق ببياناتك، تواصل عبر صفحة التواصل أو البريد dev@alofq.sa.','contact_support'],
] as $s)<section id="{{ $s[0] }}" class="legal-section reveal"><span class="material-symbols-outlined">{{ $s[3] }}</span><div><h2>{{ $s[1] }}</h2><p>{{ $s[2] }}</p></div></section>@endforeach
</article></div></section>
<x-shared-cta />
</main>@include('partials.footer')@endsection
@push('scripts')<script src="{{ asset('assets/js/legal.js') }}" defer></script>@endpush
