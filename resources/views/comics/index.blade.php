<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Laravel</title>

		<!-- Fonts -->
		<link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

		<!-- Styles -->
		@vite('resources/js/app.js')

</head>

<body>


		@include('layout.header')
		<main class="d-flex flex-wrap justify-content-between">
		@foreach ($comics as $comic)
				<div class="card w-25 m-5 text-center bg-dark">
						<img src="{{ $comic['thumb'] }}" alt="">
						<h4 class="text-white"><a href="{{ route('comics.show',['comic' => $comic->id])}}">{{ $comic['title'] }}</a></h4>
				</div>
		@endforeach
		</main>
		@include('layout.footer')

</body>

</html>