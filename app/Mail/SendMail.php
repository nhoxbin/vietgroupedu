<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct($data) {
        $this->data = $data;
    }

    public function build() {
        return $this->from($this->data['email'])
                    ->subject('New Message From Customer')
                    ->view('contact_email')
                    ->with('data', $this->data);
    }
}
