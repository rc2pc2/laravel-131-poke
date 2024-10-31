<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePokemonRequest;
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
    public function store(StorePokemonRequest $request)
    {
        $formData = $request->validate();
        $pokemon = Pokemon::create($formData);
        return redirect()->route("pokemon.show", [ "id" => $pokemon->id]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pokemon = Pokemon::findOrFail($id);
        return view("pokemons.edit", compact("pokemon"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StorePokemonRequest $request, string $id)
    {
        $formData = $request->validate();
        $pokemon = Pokemon::findOrFail($id);
        $pokemon->update($formData);
        return redirect()->route("pokemon.show", [ "id" => $pokemon->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pokemon = Pokemon::findOrFail($id); // % trova il pokemon
        $pokemon->delete(); // # se l'hai trovato cancellalo dal db

        return redirect()->route("pokemon.index");
    }
}
