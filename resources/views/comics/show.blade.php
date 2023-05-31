@extends('layout.app')

@section('content')
	<main class="d-flex flex-wrap justify-content-center">

		<div class="card w-50 text-center m-5">
			<img src=" {{ $comic['thumb'] }}" alt="">
			<h3>{{ $comic['title'] }}</h3>
			<p><strong>descrizione:</strong> {{ $comic['description'] }}</p>
			<p> <strong>prezzo:</strong> {{ $comic['price'] }}</p>
			<button class="btn btn-primary"><a class="text-white fw-bold "
					href="{{ route('comics.edit', $comic->id) }}">edit</a></button>
		</div>

	</main>
@endsection
