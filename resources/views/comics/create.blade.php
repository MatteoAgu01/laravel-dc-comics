@extends('layout.app')

@section('content')
	<div>
		<form action="{{ route('comics.store') }}" method="POST">
			@csrf

			<div class="p-2  flex-column align-items-center">
				<label for="title">title</label>
				<input type="text" name="title" id="title">
			</div>


			<div class="-p-3  flex-column align-items-center">
				<label for="description">description</label>
				<input type="text" name="description" id="description">
			</div>

			<div class="p-3  flex-column align-items-center">
				<label for="thumb">thumb</label>
				<input type="text" name="thumb" placeholder="link image" id="thumb">
			</div>

			<div class="p-3 flex-column align-items-center">
				<label for="price">price</label>
				<input type="text" name="price" id="price">
			</div>

			<div class="p-3  flex-column align-items-center">

				<label for="series">series</label>
				<input type="text" name="series" id="series">
			</div>

			<div class="p-3">
				<label for="sale_date">sale date</label>
				<input type="date" name="sale_date" id="sale_date">
			</div>

			<div class="p-3  flex-column align-items-center">
				<label for="type">type</label>
				<input type="text" name="type" id="type">
			</div>


			<button type="reset">reset</button>
			<button type="submit">submit</button>
		</form>

	</div>
@endsection
