<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\request;

class snakeDetails extends Mailable
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
        $email_data['species'] = $request->species;
        $email_data['description'] = $request->desc;
        $email_data['date'] = $request->date;
        $email_data['time'] = $request->time;
        $email_data['location'] = $request->location;
        return $this->subject('A new snake is rescued!')->view('admin/mail/newSnake',$email_data)->to('shuklaanupam18@gmail.com');
    }
}
