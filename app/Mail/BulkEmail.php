<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class BulkEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     * 
     */
    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $type = $this->data['type'];
        if($type=='newsletter')
        {
            $name = 'Frontier Semiconductor';
            
            $address = session('admin_email');
            $file_id = $this->data['file_id'];
            $file_name = $this->data['newsletter_name'];
            //$blade_file='/uploads/'.$file_name;

            return $this->view($file_name)->from($address, $name)->replyTo($address, $name)->subject("Frontier Semiconductor Newsletter")->with(array('file_id'=>$this->data['file_id']));
            //return \File::get(public_path().$blade_file);
        }
        else
        {
        //$address = '';
        $address = session('admin_email');
        $subject = $this->data['post_title'];
        $newsletter = $this->data['message'];
        //$newsletter = "this is another testing";
        $name = 'fsm_webserver';
        
        return $this->view('bulkemails.dynamic_message')->from($address, $name)->replyTo($address, $name)->subject($subject)->with(array('msgggg'=>$this->data['message'],'post_title'=>$this->data['post_title'],'display_image'=>$this->data['display_image']));
        }
    }
}
