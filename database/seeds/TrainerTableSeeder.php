<?php

use Illuminate\Database\Seeder;

class TrainerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Trainers::class, 10)->create();
    }
}
