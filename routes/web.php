<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

Route::get('/', [PublicController::class, "homepage"])->name("home");
Route::get('/all-pokemons', [PublicController::class, "allPokemons"])->name("allPokemons");
Route::get('/all-pokemons/detail/{name}', [PublicController::class, "detail"])->name("detail");
