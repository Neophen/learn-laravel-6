@extends('default')

@section('content')
<main class="mx-auto max-w-lg mt-4">
	@foreach ($articles as $article)
	<article class="border-b border-dashed mb-4 pb-2">
		<a href="/articles/{{$article->id}}">
			<h3>{{ $article->title }}</h3>
			<p>{{ $article->body }}</p>
		</a>
	</article>
	@endforeach
</main>
@endsection
