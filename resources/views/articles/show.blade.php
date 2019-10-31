@extends('default')

@section('content')
<main class="mx-auto max-w-lg mt-4">
	<h3>{{ $article->title }}</h3>
	<p>{{ $article->body }}</p>
</main>
@endsection
