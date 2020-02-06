<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{

       use Notifiable;

    public function ofertas(){
        return $this->hasMany('App\Oferta', 'user_id');
    }

    public function confirmations(){
        return $this->hasMany('App\Confirmation', 'id');
    }

    public function comentarios(){
        return $this->hasMany('App\Comentario', 'user_id');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'admin', 'role', 'puntuacion', 'tiempo', 'image'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function isAdmin(){
        if($this->role == 'admin')
        {
            return true;
        }
        else
        {
            return false;
        }
    }

}
