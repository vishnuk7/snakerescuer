<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\request;

class rescuercredentials extends Mailable
{
    public $email_data;
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($randpass)
    {
        $this->pass= $randpass;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(request $request)
    {
        $email_data['email'] = $request->email;
        $email_data['password'] = $this->pass;
        return $this->subject('Your login credentials')->view('admin/mail/rescuerCredentials',$email_data)->to($request->email);
    }
}
