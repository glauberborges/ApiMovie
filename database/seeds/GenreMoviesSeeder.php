<?php

use App\Cast;
use App\GenreMovie;
use Illuminate\Database\Seeder;

class GenreMoviesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(GenreMovie::class,20)->create()->each(function ($genremovie){
            $genremovie->save();
        });
    }
}
