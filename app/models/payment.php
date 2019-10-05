<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use DB;

class payment extends Model
{
    protected $table = 'payment_table';

    public static function getclientPayment(){

    	return payment_table::get();
    }

	public static function clientPayment(){

		return payment_table::insert([
			'mode_of_payment' => $data->mode_of_payment,
			'paid_time'=> $data->time_paid,
			'paid_date'=> $data->date_paid,
			'amount'=> $data->amount,
		]);
	}

	public static function 
}
