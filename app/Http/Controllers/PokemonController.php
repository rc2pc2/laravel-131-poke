<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pokemons = Pokemon::all();
        return view("pokemons.index", compact("pokemons"));
    }

        /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // % cerco con questo id la risorsa
        // ! se la trovo la restituisco
        // # altrimenti emetto una 404
        $pokemon = Pokemon::findOrFail($id);
        return view("pokemons.show", compact("pokemon"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // % restituisco un form VUOTO da popolare
        return view("pokemons.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formData = $request->all();

        // % popolamento del pokemon a manina
        $pokemon = new Pokemon();
        $pokemon->name = $formData["name"];
        $pokemon->species = $formData["species"];
        $pokemon->ability = $formData["ability"];
        $pokemon->element = $formData["element"];
        $pokemon->image = $formData["image"];
        $pokemon->save();

        // $pokemon = new Pokemon();
        // $pokemon->fill($formData);
        // $pokemon->save();

        // < popolamento con le fillable
        // $pokemon = Pokemon::create($formData);

        return redirect()->route("pokemon.show", [ "id" => $pokemon->id]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
