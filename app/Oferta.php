<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oferta extends Model
{
    protected $table = 'ofertas';
    protected $fillable = [
        'disp_desde', 'disp_hasta', 'tiempo', 'descripcion', 'user_id'
    ];

    public function usuario(){
    	return $this->belongsTo('App\User', 'user_id');
    }

    public function confirmations(){
        return $this->hasMany('App\Confirmation', 'id');
    }
}
