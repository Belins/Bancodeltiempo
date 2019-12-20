<?php

use Illuminate\Database\Seeder;
use App\Role;
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


        $user = new User();
        $user->name = 'david';
        $user->email = 'dbelinchonal18dw@ikzubirimanteo.com';
        $user->password = bcrypt('dbelinchonal18dw');
        $user->admin = 1;
        $user->role = 'admin';
        $user->save();

        $user = new User();
        $user->name = 'iñigo';
        $user->email = 'iperezes18dw@ikzubirimanteo.com';
        $user->password = bcrypt('iperezes18dw');
        $user->admin = 1;
        $user->role = 'admin';
        $user->save();


        $user = new User();
        $user->name = 'user';
        $user->email = 'dbelinchonal16ms@ikzubirimanteo.com';
        $user->password = bcrypt('dbelinchonal16ms');
        $user->admin = 0;
        $user->role = 'user';
        $user->save();
        
    }
}
