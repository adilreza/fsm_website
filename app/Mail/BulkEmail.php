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
        $address = 'fsmgroupa@gmail.com';
        $subject = $this->data['post_title'];
        $newsletter = $this->data['message'];
        //$newsletter = "this is another testing";
        $name = 'fsm_webserver';
        
    return $this->view('bulkemails.dynamic_message')->from($address, $name)->replyTo($address, $name)->subject($subject)->with(array('msgggg'=>$this->data['message'],'post_title'=>$this->data['post_title'],'display_image'=>$this->data['display_image']));
    }
}
