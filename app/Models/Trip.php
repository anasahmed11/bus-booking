<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    protected $table='trips';
    protected $fillable = [
        'bus_id','line_id','take_off_date','arrival_date'
    ];

    public function line()
    {
        return $this->belongsTo('App\Models\Line', 'line_id');
    }

    public function bus()
    {
        return $this->belongsTo('App\Models\Bus', 'bus_id');
    }

    public function tickets()
    {
        return $this->hasMany('App\Models\Ticket', 'trip_id');
    }
}
