@extends('default')

@section('content')
<main class="mx-auto max-w-lg mt-4">
	<h3 class="text-3xl border-b border-dashed my-4 pb-2">{{ $article->title }}</h3>
	<p class="my-4">{{ $article->excerpt }}</p>
	<p>{{ $article->body }}</p>
	<div class="flex flex-wrap mt-8">
		@foreach ($article->tags as $tag)
		<a href="{{ route('articles.index', ['tag' => $tag->name ]) }}"
			class="rounded-full bg-black text-white px-2 text-sm">{{ $tag->name }}</a>
		@endforeach
	</div>

	<div class="flex">
		<a href="{{ route('articles.edit', $article) }}"
			class="block border rounded py-2 px-4 hover:bg-blue-500 hover:text-white mt-8">Edit</a>
	</div>
</main>
@endsection
