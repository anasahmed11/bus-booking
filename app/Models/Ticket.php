<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $table = "tickets" ;
    protected $fillable = [
        'trip_id' ,'seat_no','user_id' , 'sub_line_id'];


    public function trip()
    {
        return $this->belongsTo('App\Models\Trip', 'trip_id');
    }

    public function seat()
    {
        return $this->belongsTo('App\Models\BusSeat', 'seat_no');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    public function sub_line()
    {
        return $this->belongsTo('App\Models\SubLine', 'sub_line_id');
    }



}
