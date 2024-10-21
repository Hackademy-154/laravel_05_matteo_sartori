<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PublicController extends Controller
{
    public function homepage () {
        return view('welcome');
    }

    public function allPokemons () {
        $all= Http::get('https://pokeapi.co/api/v2/pokemon')->json()['results'];
        return view('allPokemons', ['all'=>$all]);
    }
    public function detail ($name) {
        
        $pokemonDetail= Http::get("https://pokeapi.co/api/v2/pokemon/" . $name)->json();
        return view('detail', compact('pokemonDetail'));
       
    }
}
