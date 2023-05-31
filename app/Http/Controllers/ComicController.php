<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;

use App\Models\Comic;

class ComicController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$comics = Comic::all();
		return view('comics.index', compact('comics'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		return view('comics.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		$form_data = $this->validation($request->all());
		$form_data = $request->all();
		$newComic = new Comic();
		$newComic->fill($form_data);
		$newComic->save();
		return redirect()->route('comics.index')->with('message', "il prodotto con id {{$newComic->title}} è stato salvato con sucesso jki,");
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show(Comic $comic)
	{
		return view('comics.show', compact('comic'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Comic $comic)
	{
		return view('comics.edit', compact('comic'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Comic $comic)
	{
		$form_data = $this->validation($request->all());
		$form_data = $request->all();
		$comic->update($form_data);
		return redirect()->route('comics.index', $comic->id);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Comic $comic)
	{
		$comic->delete();
		return redirect()->route('comics.index')->with(
			'message',
			"Products with id: {$comic->id}
			cancellato con successo !"
		);
	}

	private function validation($data)
	{
		$validator = Validator::make(
			$data,
			[
				'title' => 'required|max:255|min:3',
				'description' => 'required|min:50',
				'thumb' => 'required',
				'price' => 'required',
				'series' => 'required',
				'type' => "required",
				'sale_date' => 'required'
			],
			[
				'title.required' => 'Il titolo è obbligatorio',
				'title.max' => 'Il titolo non deve superare 255 caratteri',
				'title.min' => 'Il titolo deve contenere almeno tre caratteri',
				'description.min'=>'Il minimo dei caratteri accettati è 50',
				'description.max'=>'Il massimo dei caratteri accettati è 255',
				'description.required'=>'questo campo è obbligatorio',
				'thumb.required'=> 'Devi inserire l\' url di un immagine presa da google',
				'price.required'=> ' controlla di aver messo il simbolo "$" prima del prezzo',
				'series.required'=> 'questo campo è obbligatorio',
				'type.required'=> 'questo campo è obbligatorio',
				'sale_date.required'=> 'questo campo è obbligatorio',

			]
		)->validate();
		return $validator;
	}
}
