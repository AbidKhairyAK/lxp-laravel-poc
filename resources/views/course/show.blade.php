@extends('app')

@section('title', 'Course Detail')

@section('content')
<section class="flex items-center justify-between pb-6">
	<h1 class="text-3xl text-black">{{ $item->title }}</h1>

	<button class="btn btn-sm" onclick="history.back()">
		<x-lucide-arrow-left class="h-4 w-4" />
		Back
	</button>
</section>

<div class="card bg-base-100 shadow-xl">
	<section class="card-body">
		<iframe
			title="{{ $item->title }}"
			src="{{ $item->video }}"
			class="aspect-video w-full rounded-xl"
			frameborder="0"
			allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
			referrerpolicy="strict-origin-when-cross-origin"
			allowfullscreen>
		</iframe>
	</section>
</div>
@endsection