<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\request;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *u
     * @return $this
     */
    public function build(request $request)
    {
        $email_data['email'] = $request->email;
        $email_data['constituency'] = $request->constituency;
        $email_data['dob'] = $request->dob;
        $email_data['name'] = $request->name;

        return $this->subject('Added a new rescuer')->view('admin/mail/newRescuer',$email_data)->to('vishnu.kraman88@gmail.com');
    }
}
