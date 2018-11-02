<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ResetPassword extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $reset_url;
    public function __construct($reset_url)
    {
        $this->reset_url = $reset_url;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $data['reset_url'] = $this->reset_url;
        // return $this->from('hello@simonechinaglia.net')
                // ->view('reset_email_body', $data);
        return $this->view('reset_email_body', $data);
    }
}
