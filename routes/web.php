<?php

use App\Http\Controllers\EnvironmentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PokemonController;
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

Route::get('/', [HomeController::class, "index"])->name("home");

// % Risorsa Pokemon
Route::get("/pokemons", [PokemonController::class, "index"])->name("pokemon.index");
Route::post("/pokemons", [PokemonController::class, "store"])->name("pokemon.store");
Route::get("/pokemons/create", [PokemonController::class, "create"])->name("pokemon.create");
Route::get("/pokemons/{id}", [PokemonController::class, "show"])->name("pokemon.show");

// ! Risorsa Environment
Route::prefix("/environments")->name("environment.")->group(function(){
    Route::get("/", [EnvironmentController::class, "index"])->name("index");
    Route::get("/create", [EnvironmentController::class, "create"])->name("create");
    Route::get("/{id}", [EnvironmentController::class, "show"])->name("show");
    Route::post("/", [EnvironmentController::class, "store"])->name("store");
});
// < Raggruppare una serie di rotte, che hanno il nome che inizia per x, il prefisso al loro indirzzo che inizia per y
