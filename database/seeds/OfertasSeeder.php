<?php

use Illuminate\Database\Seeder;

class OfertasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $fecha = date('Y/m/d');
  
        for ($i=0;$i<3;$i++) {
            $disp_desde = strtotime ( "+".rand(1,31)." day" , strtotime ( $fecha ) );
            $disp_desde = date ( 'Y/m/d' , $disp_desde);
            $disp_hasta = strtotime ( "+".rand(30,500)." day" , strtotime ( $fecha ) );
            $disp_hasta = date ( 'Y/m/d' , $disp_hasta );

              DB::table('ofertas')->insert([
              	'disp_desde' => $disp_desde,
                'disp_hasta'  => $disp_hasta,
                'tiempo' => rand(1,5),
                'descripcion' => Str::random(60),
                'user_id' => rand(0,6),
            ]);
        }
        
    }
}
