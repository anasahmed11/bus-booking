<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubLine extends Model
{
    protected $table = "sub_lines" ;
    protected $fillable = ['line_id','start_station_id','end_station_id'];

    public function line()
    {
       return $this->belongsTo('App\Models\Line' , 'line_id');
    }

    public function start_station()
    {
        return $this->belongsTo('App\Models\Station', 'start_station_id');
    }

    public function end_station()
    {
        return $this->belongsTo('App\Models\Station', 'end_station_id');
    }

    public function sub_line_stops()
    {
        return $this->hasMany('App\Models\SubLineStop', 'sub_lines_id');
    }
}
