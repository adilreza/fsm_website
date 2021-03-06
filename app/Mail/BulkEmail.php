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
            $subject_from_db = $this->data['custome_sub'];
            //$blade_file='/uploads/'.$file_name;

            return $this->view($file_name)->from($address, $name)->replyTo($address, $name)->subject($subject_from_db)->with(array('file_id'=>$this->data['file_id']));
            //return \File::get(public_path().$blade_file);
        }
        else if($type=="single_email")
        {
            $address = session('admin_email');
            $subject = $this->data['communication_subject'];
            $msg = $this->data['communication_message'];
            $auto_user = $this->data['auto_user'];
            $name = 'Frontier Semiconductor';
            return $this->view('bulkemails.single_mail_send')->from($address, $name)->replyTo($address, $name)->subject($subject)->with(array('com_message'=>$msg,'auto_user'=>$auto_user,'subject'=>$this->data['communication_subject']));
        }
        else if($type=="fsmlog")
        {
          return $this->view('bulkemails.fsmlog')->from($this->data['contact_email'], "Contact Request from Website")->replyTo($this->data['contact_email'], "Contact Request from website")->subject($this->data['contact_subject'])->with(array('contact_message'=>$this->data['contact_message'], 'subject'=>$this->data['contact_subject']));
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
