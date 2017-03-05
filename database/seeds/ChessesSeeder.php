<?php

use Illuminate\Database\Seeder;

class ChessesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for($i = 0; $i < 200; $i++) {
            $chess = new \App\Chess();
            $chess->name = $faker->company;
            $chess->price = rand(10000, 11000);
            $chess->description = $faker->realText(200);
            $chess->rating = rand(1, 10);
            $chess->category_id = rand(1, 11);
            $chess->save();
        }
    }
}
