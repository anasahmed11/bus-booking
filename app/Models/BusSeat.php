<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BusSeat extends Model
{
    protected $table = "bus_seats" ;
    protected $fillable = [
        'bus_id' ,
    ];


    public function bus()
    {
        return $this->belongsTo('App\Models\Bus', 'bus_id');
    }

    public function tickets()
    {
        return $this->hasMany('App\Models\Ticket', 'seat_no');
    }


}
