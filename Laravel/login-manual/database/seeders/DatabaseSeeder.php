<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::truncate();
        
        \App\Models\User::create([
            'name' => 'fatra',
            'email' => 'fatra@gmail.com',
            'password' => bcrypt('12345678')

        ]);
    }
}
