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
        $mail_list = array('xuetianhc@gmail.com','fsmgroupa@gmail.com','adilreza043@gmail.com');
        $subject = $given_data->subject;
        $message = $given_data->news;
        $data = ['message' => $message,'subject'=>$subject];

        //$all_list = DB::table('client_lists')->select('id','name','email')->get();
        //foreach($all_list as $list)
            //array_push($mail_list,$list->email);
        //return $mail_list;

        for($i=0; $i<=2; $i++){
            Mail::to( $mail_list[$i] )->send(new BulkEmail($data));
        }

        return "Ok! your message is sending to your provided email";
    }

    public function testfun()
    {
        return view('bulkemails.dynamic_message')->with('message','This is test for jeem vai ');
    }

    public function mail_blast($article_id)
    {
        $article_content = DB::table('article_tables')->where('id',$article_id)->get();
        foreach($article_content as $content)
        {
            $content_details = $content->main_content;
            $content_subject = $content->post_title;
            $display_image = $content->display_image;
        }
        //$email = "xuetianhc@gmail.com";
        $data_object = ['message' => $content_details,'post_title'=>$content_subject, 'display_image'=>$display_image];
        //return $content_details;
        //$mail_list = array('xuetianhc@gmail.com','fsmgroupa@gmail.com','adilreza043@gmail.com','mdfahimfaysal44@gmail.com');
        $mail_array = array();
        $all_email_from_db = DB::table('client_lists')->get();
        foreach($all_email_from_db as $mail)
        {
            array_push($mail_array,$mail);
        }

        Mail::to($mail_array)->send(new BulkEmail($data_object));
        return back();
    }

}

