<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class ClientsTableSeeder extends Seeder
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
            DB::table('clients')->insert([
                    'title' => $faker->name,
                    'description' => $faker->text,
                    'url' => $faker->url,
                    'email' => $faker->email
                ]);
        }
    }
}