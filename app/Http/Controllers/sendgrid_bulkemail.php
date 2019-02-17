<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\BulkEmail;
use Mail;
use DB;
use App\client_list;

class sendgrid_bulkemail extends Controller
{
    public function sendbulk_request()
    {
        return view('bulkemails.sendbulk_request');
    }
    public function sendgrid_bulkemail(Request $given_data)
    {
        $mail_list = array('xuetianhc@gmail.com','fsmgroupa@gmail.com');
        $subject = $given_data->subject;
        $message = $given_data->news;
        $data = ['message' => $message,'subject'=>$subject];

        //$all_list = DB::table('client_lists')->select('id','name','email')->get();
        //foreach($all_list as $list)
            //array_push($mail_list,$list->email);
        //return $mail_list;

        for($i=0; $i<=1; $i++){
            Mail::to( $mail_list[$i] )->send(new BulkEmail($data));
        }

        return "Ok! your message is sending to your provided email";
    }

    public function testfun()
    {
        return view('bulkemails.dynamic_message')->with('message','This is test for jeem vai ');
    }

}

