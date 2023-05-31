@extends('layout.app')

@section('content')
	<main class="d-flex flex-wrap justify-content-center">

		@if (session()->has('message'))
			<div class="m-5 py-5 ">
				<div class="alert alert-success">
					{{ session()->get('message') }}
				</div>
			</div>
		@endif

		@foreach ($comics as $comic)
			@include('partials.card')
		@endforeach

		<!-- Modal -->
		@include('partials.modale')
	</main>
@endsection
