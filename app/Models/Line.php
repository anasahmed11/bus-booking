<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Line extends Model
{

    protected $table = "lines";

    protected $fillable = [
        'start_station', 'end_station',
    ];

    public function first_station()
    {
        return $this->belongsTo('App\Models\Station', 'start_station');
    }

    public function last_station()
    {
        return $this->belongsTo('App\Models\Station', 'end_station');
    }

    public function trips()
    {
        return $this->hasMany('App\Models\Trip', 'trip_id');
    }

    public function stops()
    {
        return $this->hasMany('App\Models\Stop', 'line_id');
    }
}
