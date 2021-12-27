<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory;
use Illuminate\Support\Facades\DB;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teachers');
        $faker =Factory::create('id_ID');
        $gender =['L','P'];
        for($i=0; $i<100; $i++){
            DB::table('teachers')->insert([
                'name'=> $faker->name,
                'age'=> $faker->numberBetween(17,30),
                'address'=> $faker->address,
                'email'=> $faker->email,
                'gender'=> $faker->randomElement($gender),
            ]);
        }
    }
}
