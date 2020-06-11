<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new App\User();
        $user->password = Hash::make('123mudar');
        $user->email = 'api@movie.com.br';
        $user->name = 'Api Movie';
        $user->save();
    }
}
