<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Station extends Model
{
    protected $table = "stations" ;
    protected $fillable = [
        'name'
    ];


    public function stops()
    {
        return $this->hasMany('App\Models\Stop', 'station_id');
    }

}
