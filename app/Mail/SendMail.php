<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\mail\SendMail;
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
     *
     * @return $this
     */
    public function build(request $request)
    {
        $email_data['email'] = $request->email;
        $email_data['constituency'] = $request->constituency;
        $email_data['bloodgroup'] = $request->bloodgroup;
        $email_data['dob'] = $request->dob;
        $email_data['name'] = $request->name;
        $email_data['bloodgroup'] = $request->bloodgroup;
        return $this->subject('Added a new rescuer')->view('admin/mail',$email_data)->to('shuklaanupam18@gmail.com');
        
    }
}
