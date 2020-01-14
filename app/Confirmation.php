<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Confirmation extends Model
{

	protected $fillable = [
        'oferta_id', 'user_id'
    ];

    public function oferta(){
    	return $this->belongsTo('App\Oferta', 'oferta_id');
    }

    public function usuario(){
    	return $this->belongsTo('App\User', 'user_id');
    }
}
