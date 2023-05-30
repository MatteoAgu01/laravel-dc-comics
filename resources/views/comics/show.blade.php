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
		<main class="d-flex flex-wrap justify-content-center">

				<div class="card w-50 text-center m-5">
						<img src=" {{ $comic['thumb'] }}" alt="">
						<h3>{{ $comic['title'] }}</h3>
						<p><strong>descrizione:</strong> {{ $comic['description'] }}</p>
						<p> <strong>prezzo:</strong> {{ $comic['price'] }}</p>
						<button class="btn btn-primary"><a href="{{ route('comics.edit', $comic->id)}}">edit</a></button>
				</div>

		</main>
		@include('layout.footer')

</body>

</html>
