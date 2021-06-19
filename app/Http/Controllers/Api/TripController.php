<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller as Controller;
use App\Models\BusSeat;
use App\Models\SubLineStop;
use App\Models\Ticket;
use App\Models\Trip;
use App\Repositories\SubLineRepository;
use Validator;
use Auth;
use Response;


use Illuminate\Http\Request;


class TripController extends Controller
{
    public function __construct(SubLineRepository $SubLineRepository)
    {
        $this->SubLineRepository = $SubLineRepository;
    }

    public function available_seats(Request $request)
    {
        $validator = Validator::make($request->all(),
            [
                'trip_id' => 'required|exists:trips,id',
                'start_station'=>'required|string',
                'end_station'=>'required|string'

            ],
            [

            ]
        );
        if ($validator->fails()) {
            return response()->json(
                array(
                    'success'=>false,'response_code'=>400,'message'=>'validation error',
                    'data' => $validator->getMessageBag()->toArray()
                )
                ,200
            );
        }else{
            //to find the bus id and line id
            $trip=Trip::where('id','=',$request->trip_id)->first();
            //to allow search between two stations
            $search=$this->SubLineRepository->search(request())
                ->where('line_id','=',$trip->line_id)
                ->first();
            if($search){
                //to get all included stops for these sub line
                $stop_ids=SubLineStop::where('sub_lines_id','=',$search->id)->pluck('stop_id')->all();
                //to get all sub line that include the selected sub line stops
                $sub_lines_ids=SubLineStop::whereIn('stop_id', $stop_ids)
                    ->groupBy('sub_lines_id')
                    ->pluck('sub_lines_id')
                    ->all()
                ;
                //to get all booked seats
                $all_seats=Ticket::whereIn('sub_line_id',$sub_lines_ids)
                    ->where('trip_id','=',$request->trip_id)
                    ->pluck('seat_no')
                    ->all()
                ;
                //to get available seats
                $seats=BusSeat::where('bus_id','=',$trip->bus_id)->whereNotIn('id', $all_seats)->select('id','bus_id')->get();


                return response()->json(
                    array(
                        'success'=>true,'response_code'=>200,'message'=>'list loaded successfully',
                        'data' => $seats
                    )

                );
            }else{
                return response()->json(
                    array(
                        'success'=>false,'response_code'=>500,'message'=>'not found',
                        'data' => ''
                    )

                );
            }

        }

    }

    public function other_solution(Request $request)
    {
        $validator = Validator::make($request->all(),
            [
                'trip_id' => 'required|exists:trips,id',
                'start_station'=>'required|string',
                'end_station'=>'required|string'

            ],
            [

            ]
        );
        if ($validator->fails()) {
            return response()->json(
                array(
                    'success'=>false,'response_code'=>400,'message'=>'validation error',
                    'data' => $validator->getMessageBag()->toArray()
                )
                ,200
            );
        }else{
            //to find the bus id and line id
            $trip=Trip::where('id','=',$request->trip_id)->first();
            //to allow search between two stations
            $search=$this->SubLineRepository->search(request())
                ->where('line_id','=',$trip->line_id)
                ->first();
            if($search){
                //to get all included stops for these sub line
                $stop_ids=SubLineStop::where('sub_lines_id','=',$search->id)->pluck('stop_id')->all();
                //to get all sub line that include the selected sub line stops
                $sub_lines_ids=SubLineStop::whereIn('stop_id', $stop_ids)
                    ->groupBy('sub_lines_id')
                    ->pluck('sub_lines_id')
                    ->all()
                ;
                $seats=BusSeat::where('bus_id','=',$trip->bus_id)
                    ->whereDoesntHave('tickets',function ($seats) use ($request,$sub_lines_ids) {
                        $seats->whereIn('sub_line_id',$sub_lines_ids)->where('trip_id','=',$request->trip_id);
                    })->get()
                ;


                return response()->json(
                    array(
                        'success'=>true,'response_code'=>200,'message'=>'list loaded successfully',
                        'data' => $seats
                    )

                );
            }else{
                return response()->json(
                    array(
                        'success'=>false,'response_code'=>500,'message'=>'not found',
                        'data' => ''
                    )

                );
            }

        }

    }


}
