<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stop extends Model
{
    protected $table = "stops" ;
    protected $fillable = ['line_id','station_id'];

    public function line()
    {
       return $this->belongsTo('App\Models\Line' , 'line_id');
    }

    public function station()
    {
        return $this->belongsTo('App\Models\Station', 'station_id');
    }


    public function sub_line_stops()
    {
        return $this->hasMany('App\Models\SubLineStop', 'stop_id');
    }
}
