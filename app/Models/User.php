<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laratrust\Traits\LaratrustUserTrait;
use Laravel\Passport\HasApiTokens;


class User extends Authenticatable
{

    use Notifiable ;
    use HasApiTokens ;


    protected $table = 'users';


    protected $fillable = [

        'name', 'email', 'password', 'phone' , 'image'  ,
        'description'
        ,'type'
        ,'status'
        ,'device_token'

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function setPasswordAttribute($pass)
    {
        $this->attributes['password'] = \Hash::make($pass);
    }

    public function AauthAcessToken()
    {
        return $this->hasMany('App\Models\OauthAccessToken');
    }

}
