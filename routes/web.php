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
Route::get("/pokemons/{id}/edit", [PokemonController::class, "edit"])->name("pokemon.edit");
Route::put("/pokemons/{id}", [PokemonController::class, "update"])->name("pokemon.update");
Route::delete("/pokemons/{id}", [PokemonController::class, "destroy"])->name("pokemon.delete");

Route::get("/environments", [EnvironmentController::class, "index"])->name("environment.index");
Route::get("/environments/deleted", [EnvironmentController::class, "deletedIndex"])->name("environment.deleted-index");
Route::post("/environments", [EnvironmentController::class, "store"])->name("environment.store");
Route::get("/environments/create", [EnvironmentController::class, "create"])->name("environment.create");
Route::get("/environments/{environment}", [EnvironmentController::class, "show"])->name("environment.show");
Route::put("/environments/{environment}", [EnvironmentController::class, "update"])->name("environment.update");
Route::delete("/environments/{environment}", [EnvironmentController::class, "destroy"])->name("environment.delete");
Route::delete("/environments/{environment}/permanent-delete", [EnvironmentController::class, "environment.permanentDelete"])->name("permanent-delete");
Route::get("/environments/{environment}/edit", [EnvironmentController::class, "edit"])->name("environment.edit");
Route::patch("/environments/{environment}/restore", [EnvironmentController::class, "restore"])->name("environment.restore");



// ! Risorsa Environment
// Route::prefix("/environments")->name("environment.")->group(function(){
// });
// < Raggruppare una serie di rotte, che hanno il nome che inizia per x, il prefisso al loro indirzzo che inizia per y
