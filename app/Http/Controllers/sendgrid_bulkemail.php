<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\BulkEmail;
use Mail;

class sendgrid_bulkemail extends Controller
{
    public function sendbulk_request()
    {
        return view('bulkemails.sendbulk_request');
    }
    public function sendgrid_bulkemail(Request $given_data)
    {
        $subject = $given_data->subject;
        $message = $given_data->news;
        $data = ['message' => $message,'subject'=>$subject];
        Mail::to('xuetianhc@gmail.com')->send(new BulkEmail($data));
        return view('index');
    }
}
