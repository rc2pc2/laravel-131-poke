<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages.home');
})->name("home");


Route::get('/pokemons', function () {
    $pokemons = config("db.pokemon");
    // dd(compact("pokemons")); // # dump and die
    return view('pokemons.index', compact("pokemons"));  // < [ "pokemons" => $pokemons ]
})->name("pokemons-index");

Route::get('/pokemons/{index}', function (string $index) {
    // dd($index);
    $pokemons = config("db.pokemon");
    if (isset($pokemons[$index])){
        $pokemon = $pokemons[$index];
        // dd($pokemon);
        return view('pokemons.show', compact("pokemon") );
    } else {
        abort(404);
    }
})->name("pokemons.show");
