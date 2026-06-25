@php
$faqs=[
['general','ما الخدمات التي تقدمها شركة الأفق؟','نقدم تطوير المواقع والتطبيقات والأنظمة الإدارية والمتاجر الإلكترونية وتصميم UI/UX والتكاملات السحابية والدعم الفني.'],
['process','كيف تبدأون تنفيذ المشروع؟','نبدأ بجلسة لفهم الفكرة والمتطلبات، ثم التخطيط والتصميم والتطوير والاختبار قبل الإطلاق والدعم.'],
['pricing','كيف يتم تحديد تكلفة المشروع؟','تعتمد التكلفة على نطاق المشروع وعدد المزايا والتكاملات والمدة المطلوبة. يمكنك إرسال طلب عرض سعر للحصول على تقدير تفصيلي.'],
['process','كم يستغرق تنفيذ المشروع؟','تختلف المدة بحسب حجم المشروع، ويتم تحديد جدول زمني واضح ضمن العرض الفني قبل بدء التنفيذ.'],
['support','هل تقدمون دعمًا بعد الإطلاق؟','نعم، نوفر خطط دعم وصيانة وتطوير مستمر لضمان استقرار الحل ونموه.'],
['general','هل يمكن تطوير نظام مخصص بالكامل؟','نعم، نبني حلولًا مخصصة تتوافق مع عمليات المؤسسة ومتطلباتها بدل الاعتماد على القوالب المحدودة.'],
['pricing','هل يمكن تنفيذ المشروع على مراحل؟','نعم، يمكن تقسيم المشروع إلى مراحل وإطلاق نسخة أولية ثم إضافة المزايا تدريجيًا حسب الأولويات.'],
['support','كيف تحمون بيانات العملاء؟','نطبق ممارسات أمان مناسبة، وصلاحيات وصول محددة، وتشفيرًا واتصالات آمنة وفق طبيعة المشروع.'],
];
@endphp
<section class="faq-content"><div class="container mx-auto px-margin-desktop"><div class="faq-categories reveal">@foreach(['all'=>'الكل','general'=>'خدمات عامة','process'=>'طريقة العمل','pricing'=>'التكلفة','support'=>'الدعم والأمان'] as $v=>$l)<button class="{{ $v==='all'?'active':'' }}" data-faq-category="{{ $v }}">{{ $l }}</button>@endforeach</div>
<div class="faq-list reveal">@foreach($faqs as $i=>$faq)<article class="faq-item stagger-item" data-faq-item data-category="{{ $faq[0] }}"><button aria-expanded="false" aria-controls="faq-answer-{{ $i }}"><span>{{ $faq[1] }}</span><span class="material-symbols-outlined">add</span></button><div id="faq-answer-{{ $i }}" hidden><p>{{ $faq[2] }}</p></div></article>@endforeach</div>
<p class="faq-empty" hidden data-faq-empty>لا توجد أسئلة مطابقة للبحث.</p></div></section>
