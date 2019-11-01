@extends('default')

@section('content')
<main class="mx-auto max-w-lg mt-4">
	@forelse ($articles as $article)
	<article class="border-b border-dashed mb-4 pb-2">
		<a href="{{ $article->path() }}">
			<h3>{{ $article->title }}</h3>
			<p>{{ $article->excerpt }}</p>
		</a>
	</article>
	@empty
	<p>No relevant articles yet.</p>
	@endforelse
</main>
@endsection
