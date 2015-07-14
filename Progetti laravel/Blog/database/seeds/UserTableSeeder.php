<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'first_name' => 'Ignazio',
            'last_name' => 'Lipari',
            'slug' => 'ignazio_lipari',

            'email' => 'ignazio.lipari90@libero.it',
            'password' => '654321'

        ]);

        User::create([
            'first_name' => 'Ciccio',
            'last_name' => 'Pasticcio',
            'slug' => 'ciccio_pasticcio',

            'email' => 'ciccio@gmail.com',
            'password' => '123456'

        ]);
    }
}
