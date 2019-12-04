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
        $user->name = 'admin';
        $user->email = 'admin@gmail.com';
        $user->password = bcrypt('admin');
        $user->admin = 1;
        $user->save();

        $user = new User();
        $user->name = 'inigo';
        $user->email = 'iperezes18dw@ikzubirimanteo.com';
        $user->password = bcrypt('admin1');
        $user->admin = 1;
        $user->save();

        $user = new User();
        $user->name = 'user';
        $user->email = 'user@gmail.com';
        $user->password = bcrypt('user');
        $user->admin = 0;
        $user->save();
        
    }
}
