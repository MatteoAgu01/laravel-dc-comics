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
