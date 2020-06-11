<?php

use App\Cast;
use App\Directors;
use Illuminate\Database\Seeder;

class DirectorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       factory(Directors::class,100)->create()->each(function ($directors){
           $directors->save();
       });
    }
}
