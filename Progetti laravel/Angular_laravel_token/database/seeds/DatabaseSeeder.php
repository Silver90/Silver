<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        DB::table('users')->delete();

        $users = array(
            ['name' => 'Ignazio Lipari', 'email' => 'ignazio.lipari90@libero.it', 'password' => Hash::make('secret')],
            ['name' => 'Roberta Randazzo', 'email' => 'roby@gmail.it', 'password' => Hash::make('secret')],
            ['name' => 'Gino Paoli', 'email' => 'ciaogino90@libero.it', 'password' => Hash::make('secret')],
            ['name' => 'Pinco Panco', 'email' => 'pancopinco@outlook.it', 'password' => Hash::make('secret')],
        );

        foreach ($users as $user)
        {
            User::create($user);
        }

        Model::reguard();
    }
}
