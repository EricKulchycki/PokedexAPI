<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Pokedex;
use App\Http\Resources\Pokedex as PokemonResource;

class PokedexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // GET pokemon
        $pokemon = Pokedex::orderBy('id')->paginate(15);

        return PokemonResource::collection($pokemon);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // GET single pokemon based on ID
        $pokemon = Pokedex::findOrFail($id);

        return new PokemonResource($pokemon);
    }


}
