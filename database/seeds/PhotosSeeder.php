<?php

use Illuminate\Database\Seeder;
use App\Photo;

class PhotosSeeder extends Seeder
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
            $photo = new Photo();
            $photo->name = $faker->lastName;
            $photo->chess_id = rand(1, 11);
            $photo->save();
        }
    }
}
