<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\database\migrations;
use Illuminate\Support\Facades\DB;
use \Input as Input;

class subscriber_related extends Controller
{
    public function thank_you()
    {
        return view('thank_you')->with('thank_you_message','This page is under constructions');
    }
    public function get_subscriber_request(request $subscriber_data)
    {
        $subscriber_name = $subscriber_data->input('subscriber_name');
        $subscriber_email = $subscriber_data->input('subscriber_email');
        $exist_user = DB::table('subscribers')->where('subscriber_email', $subscriber_email)->count();
        if($exist_user==0)
        {
            $mak_array = array('subscriber_name'=>$subscriber_name,'subscriber_email'=>$subscriber_email);
            session(['subscriber_name'=>$subscriber_name]);
            session(['subscriber_email'=>$subscriber_email]);
            session(['status'=>'done']);
            DB::table('subscribers')->insert($mak_array);
            return view('thank_you');
        }
        else
        {
            return view('thank_you')->with('thank_you_message','Sorry this email is already used by another user!!');
        }

        
    }
}
