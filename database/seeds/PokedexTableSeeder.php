<?php

use Illuminate\Database\Seeder;

class PokedexTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Pokedex::class, 30)->create();
    }
}
