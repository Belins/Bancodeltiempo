<?php

use Illuminate\Database\Seeder;
use App\Confirmation;
class ConfirmationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $conf = new Confirmation();
        $conf->oferta_id = 1;
        $conf->user_id = 3;
        $conf->save();
    }
}
