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
        $user->name = 'David Belinchon';
        $user->email = 'dbelinchonal18dw@ikzubirimanteo.com';
        $user->password = bcrypt('dbelinchonal18dw');
        $user->phone = 683477767;
        $user->localidad = 'Azkoitia';
        $user->especialidad = 'Mecanico';
        $user->puntuacion = 5;
        $user->tiempo = 4;
        $user->admin = 0;
        $user->email_verified_at = '2020-01-28 07:37:44';
        $user->role = 'user';
        $user->save();

        $user = new User();
        $user->name = 'Iñigo Perez';
        $user->email = 'iperezes18dw@ikzubirimanteo.com';
        $user->password = bcrypt('iperezes18dw');
        $user->phone = 678254163;
        $user->localidad = 'Urnieta';
        $user->especialidad = 'Programador';
        $user->puntuacion = 3;
        $user->tiempo = 4;
        $user->admin = 1;
        $user->email_verified_at = '2020-01-28 07:37:44';
        $user->role = 'admin';
        $user->save();


        $user = new User();
        $user->name = 'User Example';
        $user->email = 'dbelinchonal16ms@ikzubirimanteo.com';
        $user->password = bcrypt('dbelinchonal16ms');
        $user->phone = 674153473;
        $user->localidad = 'Donostia';
        $user->especialidad = 'Jardinero';
        $user->puntuacion = 4;
        $user->tiempo = 4;
        $user->admin = 0;
        $user->email_verified_at = '2020-01-28 07:37:44';
        $user->role = 'user';
        $user->save();

        $user = new User();
        $user->name = 'Perico';
        $user->email = 'pericopalomo1245@gmail.com';
        $user->password = bcrypt('pericopalomo1245');
        $user->phone = 674153473;
        $user->localidad = 'Donostia';
        $user->especialidad = 'Mecanico';
        $user->puntuacion = 4;
        $user->tiempo = 4;
        $user->admin = 0;
        $user->email_verified_at = '2020-01-28 07:37:44';
        $user->role = 'user';
        $user->save();
        
    }
}
