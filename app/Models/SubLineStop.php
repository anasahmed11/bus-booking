<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubLineStop extends Model
{
    protected $table = "sub_line_stops" ;
    protected $fillable = ['sub_lines_id','stop_id'];

    public function line()
    {
       return $this->belongsTo('App\Models\SubLine' , 'sub_lines_id');
    }

    public function stop()
    {
        return $this->belongsTo('App\Models\Stop', 'stop_id');
    }

}
