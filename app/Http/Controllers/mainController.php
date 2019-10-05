<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\booking;

class mainController extends Controller
{
    public function login(){
    	return view('login');
    }

    public function signup(){
    	return view('signup');
    }

    public function user(){
    	return view('user');
    }

    public function booking(){
    	return view('booking.booking');
    }

    public function info(){
    	return view('booking.info');
    }

    // tutorial start
    public function bookNow(Request $request){
        // if($request->game == "game 1"){
        //     return response()->json([
        //         'response' => false,
        //         'message' => "Game 1 is not available"
        //     ]);
        // }

        $newDate = str_replace('-', '', $request->date);
        $newTime = str_replace(':', '', $request->time);

        $referenceNumber = $request->game . $newDate . $newTime;

        $query = booking::saveBookingData($request, $referenceNumber);
        if($query){
            return response()->json([
                'response' => true,
                'data' => $query
            ]);
        }else{
            return response()->json([
                'response' => false,
                'data' => array(),
                'message' => "There's an error"
            ]);
        }
    }
}

