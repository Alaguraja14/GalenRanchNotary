<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class ApostilleMail extends Mailable
{
    use Queueable, SerializesModels;
    protected $data;
    public $attachmentPath;
    public $attachmentName;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data = [],$attachmentPath,$attachmentName)
    {
        $this->data = $data;
        $this->attachmentPath = $attachmentPath;
        $this->attachmentName = $attachmentName;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        Log::info("This is mail model");
        return $this->from('hodolabs@gmail.com')->subject('New Apostille Enquiry')->view('apostille_email_template')->with('data', $this->data)->attach($this->attachmentPath, [
            'as' => $this->attachmentName,
        ]);
        return $this->view('view.name');
    }
}
