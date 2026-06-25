@extends('layouts.app')
@section('title','الشروط والأحكام | شركة الأفق المتعدد لتقنية المعلومات')
@push('styles')<link rel="stylesheet" href="{{ asset('assets/css/legal.css') }}"><link rel="stylesheet" href="{{ asset('assets/css/legal-light.css') }}">@endpush
@section('content')@include('partials.header')
<main class="legal-page"><section class="legal-hero legal-hero--light"><div class="legal-grid"></div><div class="container mx-auto px-margin-desktop relative z-10 text-center reveal"><span class="legal-kicker">اتفاقية الاستخدام</span><h1>الشروط والأحكام</h1><p>يرجى قراءة هذه الشروط قبل استخدام الموقع أو طلب خدماتنا.</p><small>آخر تحديث: 25 يونيو 2026</small></div></section>
<section class="legal-content"><div class="container mx-auto px-margin-desktop legal-layout"><aside class="legal-index reveal"><h2>فهرس الشروط</h2>@foreach(['acceptance'=>'قبول الشروط','services-terms'=>'الخدمات','quotes'=>'العروض والتعاقد','client-duties'=>'التزامات العميل','intellectual'=>'الملكية الفكرية','liability'=>'حدود المسؤولية','termination'=>'إنهاء الخدمة','terms-contact'=>'التواصل'] as $id=>$label)<a href="#{{ $id }}">{{ $label }}</a>@endforeach</aside>
<article class="legal-article">@foreach([
['acceptance','قبول الشروط','باستخدام هذا الموقع أو طلب أي خدمة، فإنك تقر بقراءة هذه الشروط والموافقة عليها.','handshake'],
['services-terms','نطاق الخدمات','تقدم الشركة خدمات التطوير والتصميم والدعم وفق النطاق المتفق عليه كتابيًا في العرض أو العقد.','design_services'],
['quotes','العروض والتعاقد','تصبح المدة والتكلفة ملزمة بعد اعتماد نطاق العمل وتوقيع الاتفاق واستكمال الدفعة المتفق عليها.','request_quote'],
['client-duties','التزامات العميل','يلتزم العميل بتقديم المعلومات والمحتوى والموافقات اللازمة، وضمان حقه في استخدام المواد التي يقدمها.','assignment_ind'],
['intellectual','الملكية الفكرية','تنتقل حقوق المخرجات النهائية وفق العقد وبعد سداد المستحقات، وتظل الأدوات العامة والحقوق السابقة ملكًا لأصحابها.','copyright'],
['liability','حدود المسؤولية','لا نتحمل الأضرار الناتجة عن إساءة الاستخدام أو خدمات الأطراف الثالثة أو الظروف الخارجة عن السيطرة ضمن الحدود النظامية.','balance'],
['termination','التعديل وإنهاء الخدمة','يمكن تعديل أو إنهاء العمل وفق اتفاق مكتوب مع تسوية الأعمال والمبالغ المستحقة حتى تاريخ الإنهاء.','contract'],
['terms-contact','التواصل','لأي استفسار عن هذه الشروط تواصل معنا عبر صفحة التواصل.','contact_support'],
] as $s)<section id="{{ $s[0] }}" class="legal-section reveal"><span class="material-symbols-outlined">{{ $s[3] }}</span><div><h2>{{ $s[1] }}</h2><p>{{ $s[2] }}</p></div></section>@endforeach</article></div></section>
<x-shared-cta /></main>
@include('partials.footer')@endsection
@push('scripts')<script src="{{ asset('assets/js/legal.js') }}" defer></script>@endpush
