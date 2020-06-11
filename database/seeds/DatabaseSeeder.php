<?php

use App\GenreMovie;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call([
             UserSeeder::class,
             CastSeeder::class,
             DirectorsSeeder::class,
             GenreMoviesSeeder::class
         ]);
    }
}
