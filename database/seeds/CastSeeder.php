<?php

use App\Cast;
use Illuminate\Database\Seeder;

class CastSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       factory(Cast::class,100)->create()->each(function ($cast){
           $cast->save();
       });
    }
}
