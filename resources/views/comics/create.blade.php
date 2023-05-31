@extends('layout.app')

@section('content')
	<div class="w-50 m-auto py-3">

		@if ($errors->any())
			<div class="allert allert-danger">
				<ul>
					@foreach ($errors as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif

		<form action="{{ route('comics.store') }}" method="POST" class="d-flex flex-column align-items-center">
			@csrf

			<div class="p-1  flex-column align-items-center">
				<label class="text-uppercase fw-bold" for="title">title</label>

				<input type="text" name="title" id="title" aria-describedby="titleHelp"
					class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}">

				<div id="titleHelp" class="form-text">
					<span>inserisci un titolo valido, minimo 3 caratteri</span>
				</div>

				@error('title')
					<div class="invalid-feedback">
						{{ $message }}
					</div>
				@enderror
			</div>

			<div class="p-1  flex-column align-items-center">
				<label class="text-uppercase fw-bold"  for="thumb">thumb</label>
				<input type="text" name="thumb" id="thumb" aria-describedby="imgHelp"
				class="form-control @error('thumb') is-invalid @enderror" value="{{ old('thumb') }}">

				<div id="imgHelp" class="form-text">
					<span>inserisci un link valido</span>
				</div>

				@error('thumb')
				<div class="invalid-feedback">
					{{ $message }}
				</div>
			@enderror
			</div>

			<div class="p-3 flex-column align-items-center">
				<label class="text-uppercase fw-bold"  for="price">price</label>
				<input type="text" name="price" id="price" aria-describedby="priceHelp"
				class=" form-control @error('price') is-invalid @enderror" value="{{ old('price') }}">

				<div id="priceHelp" class="form-text">
					<span>prima del valore numerico usa '$'</span>
				</div>

				@error('price')
				<div class="invalid-feedback">
					{{ $message }}
				</div>
			@enderror
			</div>

			<div class="p-1  flex-column align-items-center">
				<label class="text-uppercase fw-bold"  for="series">series</label>
				<input type="text" name="series" id="series" aria-describedby="seriesHelp"
				class=" form-control @error('series') is-invalid @enderror" value="{{ old('series') }}">

				<div id="priceHelp" class="form-text">
					<span>inserisci una serie valida</span>
				</div>

				@error('series')
				<div class="invalid-feedback">
					{{ $message }}
				</div>
			@enderror
			</div>

			<div class="p-3">
				<label class="text-uppercase fw-bold"  for="sale_date">sale date</label>
				<input type="date" name="sale_date" id="sale_date" aria-describedby="sale_dateHelp"
				class=" form-control @error('sale_date') is-invalid @enderror" value="{{ old('sale_date') }}">

				<div id="sale_dateHelp" class="form-text">
					<span>inserisci un adata valida</span>
				</div>

				@error('sale_date')
				<div class="invalid-feedback">
					{{ $message }}
				</div>
			@enderror
			</div>

			<div class="p-1  flex-column align-items-center">
				<label class="text-uppercase fw-bold"  for="type">type</label>
				<input type="text" name="type" id="type" aria-describedby="typeHelp"
				class=" form-control @error('type') is-invalid @enderror" value="{{ old('type') }}">

				<div id="typeHelp" class="form-text">
					<span>inserisci un tipo</span>
				</div>

				@error('type')
				<div class="invalid-feedback">
					{{ $message }}
				</div>
			@enderror
			</div>

			<div class="-p-1  flex-column align-items-center">
				<label class="text-uppercase fw-bold"  for="description">description</label>
				<input type="text-area" name="description" id="description" aria-describedby="descriptionHelp"
				class=" form-control @error('description') is-invalid @enderror" value="{{ old('description') }}">

				<div id="descriptionHelp" class="form-text">
					<span>inserisci una descrizione, minimo 50 caratteri</span>
				</div>

				@error('description')
				<div class="invalid-feedback">
					{{ $message }}
				</div>
			@enderror
			</div>

			<div>
				<button type="reset" class="btn btn-danger my-2">reset</button>
				<button type="submit" class="btn btn-primary">submit</button>
			</div>
		</form>

	</div>
@endsection
