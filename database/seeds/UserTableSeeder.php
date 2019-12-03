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
        $role_user = Role::where('name', 'user')->first();
        $role_admin = Role::where('name', 'admin')->first();

        $user = new User();
        $user->name = 'David';
        $user->lastname = 'Belinchon';
        $user->email = 'dbelinchonal18dw@ikzubirimanteo.com';
        $user->phone = '645885276';
        $user->password = bcrypt('admin');
        $user->verificated = '1';
        $user->codigo = Str::random(20);
        $user->save();
        $user->roles()->attach($role_admin);


        $user = new User();
        $user->name = 'Inigo';
        $user->lastname = 'Perez';
        $user->email = 'ipezeres18dw@ikzubirimanteo.com';
        $user->phone = '645696969';
        $user->password = bcrypt('admin');
        $user->verificated = '1';
        $user->codigo = Str::random(20);
        $user->save();
        $user->roles()->attach($role_admin);


        
    }
}
