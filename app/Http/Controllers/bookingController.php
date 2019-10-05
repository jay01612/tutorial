<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\booking;

class bookingController extends Controller
{
    //
    public function hello(){
    	$query = booking::get();
    	return view('test')->with('jayTable', $query);
    }
}
