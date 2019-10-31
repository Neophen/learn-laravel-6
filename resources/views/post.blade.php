@extends('default')

@section('content')
<div class="flex-center position-ref full-height">
	<div class="content">
		<div class="title m-b-md">
			Hello
		</div>

		<div class="links">
			<p>{{ $post->body }}</p>
		</div>
	</div>
</div>
@endsection
