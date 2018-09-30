<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SiteCall extends Mailable
{
    use Queueable, SerializesModels;

    public $contacts;

    /**
     * Create a new message instance.
     *
     * @param array $contacts
     * @return void
     */
    public function __construct(array $contacts)
    {
        $this->contacts = $contacts;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.sitecall')->subject('Звонок с сайта '.request()->root());
    }
}
