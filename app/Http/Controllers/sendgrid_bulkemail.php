<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\BulkEmail;
use Mail;

class sendgrid_bulkemail extends Controller
{
    public function sendgrid_bulkemail()
    {
        $data = ['message' => 'This is a test!'];
        Mail::to('xuetianhc@gmail.com')->send(new BulkEmail($data));
        return view('index');
    }
}
