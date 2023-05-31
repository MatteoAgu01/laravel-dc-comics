@extends('layout.app')

@section('content')
	<main class="d-flex flex-wrap justify-content-center">

		<div class="card d-flex flex-row w-75 text-center m-5">
			<div>
				<img src=" {{ $comic['thumb'] }}" alt="">
			</div>
			<div class="d-flex flex-column justify-content-around p-4">
				<h3>{{ $comic['title'] }}</h3>
				<p class="text-capitalize"><strong>descrizione:</strong> <br>{{ $comic['description'] }}</p>
				<p class="text-capitalize"> <strong>prezzo:</strong> {{ $comic['price'] }}</p>
				<button class="btn btn-primary"><a class="text-white fw-bold "
						href="{{ route('comics.edit', $comic->id) }}">edit</a></button>
			</div>
		</div>

	</main>
@endsection
