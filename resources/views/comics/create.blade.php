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



<body class="flex-column align-items-center">

		<form action="{{ route('comics.store') }}" method="POST" >
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


</body>

</html>
