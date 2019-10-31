<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Dianukas</title>

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
	<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

</head>

<body>
	<nav class="bg-gray-100 p-4">
		<ul class="flex justify-center">
			<li class="mx-2"><a href="/" class="hover:underline">Home</a></li>
			<li class="mx-2"><a href="/articles" class="hover:underline">Articles</a></li>
		</ul>
	</nav>
	@yield('content')
</body>

</html>
