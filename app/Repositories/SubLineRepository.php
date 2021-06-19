<?php

namespace App\Repositories;

use App\Models\SubLine;
use Symfony\Component\HttpFoundation\Request;

class SubLineRepository
{

    /**
     * @param $request
     * @return $this|mixed
     */
    public function search(Request $request)
    {
        $sub_line= SubLine::
            WhereHas('start_station', function ($sub_line) use ($request) {
                $sub_line->where('name', 'like', '%' . $request->query->get('start_station') . '%');
            })->WhereHas('end_station', function ($sub_line) use ($request) {
                $sub_line->where('name', 'like', '%' . $request->query->get('end_station') . '%');
            })
        ;
        return $sub_line;
    }

}
