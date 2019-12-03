<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::Insert([
            [
                'name' => 'David',
                'lastname' => 'Belinchon',
                'email' => 'dbelinchonal18dw@ikzubirimanteo.com',
                'phone' => '645885276',
                'password' => 'admin1234',
                'admin' => '1',
                'verificated' => '1',
                'codigo' => Str::random(20)
            ],
            [
                'name' => 'Inigo',
                'lastname' => 'Perez',
                'email' => 'iperezes18dw@ikzubirimanteo.com',
                'phone' => '645696969',
                'password' => 'admin1234',
                'admin' => '1',
                'verificated' => '1',
                'codigo' => Str::random(20)
            ]
            
        ]);
    }
}

