<section class="showcase-projects">
<div class="container mx-auto px-margin-desktop">
<div class="showcase-filters reveal">
<button data-filter="all" class="active">الكل</button>
@foreach($categories as $category)
<button data-filter="{{ $category->slug }}">{{ $category->name }}</button>
@endforeach
</div>
<div class="showcase-project-grid reveal">
@foreach($projects as $project)
<article class="showcase-project-card stagger-item" data-category="{{ $project->category->slug }}">
<div class="showcase-project-image"><img src="{{ asset($project->image) }}" alt="{{ $project->title }}" loading="lazy"></div>
<div class="showcase-project-body"><span>{{ $project->category->name }}</span><h2>{{ $project->title }}</h2><p>{{ implode(' · ', $project->technologies ?? []) }}</p><a href="{{ route('contact') }}">التفاصيل <span class="material-symbols-outlined">arrow_back</span></a></div>
</article>
@endforeach
</div>
</div>
</section>
