<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;
use App\Client;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1,10) as $index) {
            DB::table('projects')->insert([
                    'title' => $faker->name,
                    'description' => $faker->text,
                    'url' => $faker->url,
                    'budget' => $faker->numberBetween(1000, 10000),
                    'client_id' => Client::all()->random()->id
                ]);
        }
    }
}