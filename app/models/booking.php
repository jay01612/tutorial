<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    //
    protected $table = "booking_table";


    public static function saveBookingData($data, $referenceNumber){
    	return false;
    	return booking::insert([
    		'reference_number' => $referenceNumber,
    		'book_date' => $data->date,
    		'book_time' => $data->time,
    		'theme_id' => $data->game
    	]);

    }
}
