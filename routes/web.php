<?php

use App\Http\Controllers\EnvironmentController;
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

Route::get('/', function () {  return view('pages.home');})->name("home");

// % READ delle cRud
Route::get("/pokemons", [PokemonController::class, "index"])->name("pokemon.index");
Route::post("/pokemons", [PokemonController::class, "store"])->name("pokemon.store");
Route::get("/pokemons/create", [PokemonController::class, "create"])->name("pokemon.create");
Route::get("/pokemons/{id}", [PokemonController::class, "show"])->name("pokemon.show");


// ! Risorsa environment
Route::get("/environments", [EnvironmentController::class, "index"])->name("environment.index");
Route::get("/environments/create", [EnvironmentController::class, "create"])->name("environment.create");
Route::get("/environments/{id}", [EnvironmentController::class, "show"])->name("environment.show");
Route::post("/environments", [EnvironmentController::class, "store"])->name("environment.store");
