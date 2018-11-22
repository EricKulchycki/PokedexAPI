<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Trainers;
use App\Http\Resources\Trainer as TrainerResource;
use App\Pokedex;
use App\Http\Resources\Pokedex as PokemonResource;

class TrainerController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // PUT
        //If trainer already exists update info
        $trainer = $request->isMethod('put') ? Trainers::findOrFail ($request->email) : new Trainers;

        $trainer->email = $request->input('email');
        $trainer->password = $request->input('password');
        $trainer->captured = "";

        if($trainer->save()) {
            return new TrainerResource($trainer);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($email)
    {
        //GET
        //Return all information on captured pokemon given a trainer email
        $trainer = Trainers::findOrFail($email);

        $poke_names = $trainer->captured;
        $poke_array = array_map('trim', explode(',', $poke_names));


        $collection = collect([]);
        for($x = 0; $x < count($poke_array); $x++) {

            $pokemon = Pokedex::where('name', '=', $poke_array[$x])->get();

            $collection = $collection->concat($pokemon);
        }

        return new PokemonResource($collection);

    }

    public function printPoke($pokemon) {
        return $pokemon->toArray();
    }


    public function update(Request $request, $email)
    {
        //PUT pokemon in trainer table
        //Adding a pokemon that was captured to the trainer
        //request will have two keys, email & name (name of pokemon)

        $trainer = Trainers::findOrFail($email);

        //Check to see if there are any captured pokemon
        if($trainer->captured == "") {
            $trainer->captured = $request->name;
        }
        else {
            $trainer->captured = $trainer->captured . ',' . $request->name;
        }

        //Save the trainer
        //If successful pass trainer to resource to be printed
        if($trainer->save()) {
            return new TrainerResource($trainer);
        }



    }
}
