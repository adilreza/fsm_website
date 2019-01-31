<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\database\migrations;
use Illuminate\Support\Facades\DB;
use \Input as Input;

class contact_controller extends Controller
{
    public function contact_us_message(request $customer_ask_data)
    {
        $contact_name = $customer_ask_data->input('contact_name');
        $contact_email = $customer_ask_data->input('contact_email');
        $contact_phone = $customer_ask_data->input('contact_phone');
        $contact_subject = $customer_ask_data->input('contact_subject');
        $contact_message = $customer_ask_data->input('contact_message');

        session(['contact_ask_name',$contact_name]);

        $make_array = array('contact_name'=>$contact_name,'contact_email'=>$contact_email,'contact_phone'=>$contact_phone,'contact_subject'=>$contact_subject,'contact_message'=>$contact_message);

        DB::table('customer_queries')->insert($make_array);

        return view('contact_us')->with('successMsg','successfully received your message! Our team will replay your query as soon as possible!! thank you');
    }
}
