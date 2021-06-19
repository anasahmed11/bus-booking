<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    protected $fillable = [
        'bus_license',
    ];

    public function seats()
    {
        return $this->hasMany('\App\Models\BusSeat', 'bus_id' );
    }

}
