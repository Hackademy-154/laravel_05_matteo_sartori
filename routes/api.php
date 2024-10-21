<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

Route::get('/tuttipokemon', function () {
    $all= Http::get('https://pokeapi.co/api/v2/pokemon')->json();
    return response($all);
});
