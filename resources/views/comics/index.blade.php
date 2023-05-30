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
		@if (session()->has('message'))
			<div class="m-5 py-5 ">
				<div class="alert alert-success">
					{{ session()->get('message') }}
				</div>
			</div>
		@endif
		@foreach ($comics as $comic)
			<div class="card w-25 m-5 text-center bg-dark">
				<img src="{{ $comic['thumb'] }}" alt="">
				<h4 class="text-white"><a href="{{ route('comics.show', ['comic' => $comic->id]) }}">{{ $comic['title'] }}</a>
				</h4>
				<form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
					@csrf
					@method('DELETE')
					<button type="submit" class="btn btn-danger delete-button" data-item-title="{{ $comic->title }}">
						Delete
					</button>
				</form>
			</div>
		@endforeach
		<!-- Modal -->
		<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h1 class="modal-title fs-5" id="deleteModalLabel">ATTENZIONE</h1>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<p>Confermi di voler eliminare <span id="modal-item-title"></span>?</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Chiudi</button>
						<button type="button" class="btn btn-primary">Elimina</button>
					</div>
				</div>
			</div>
		</div>
	</main>
	@include('layout.footer')

</body>

</html>
