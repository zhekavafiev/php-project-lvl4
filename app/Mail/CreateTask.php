<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class CreateTask extends Mailable
{
    use Queueable, SerializesModels;

    public $task;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($task)
    {
        $this->task = $task;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        Log::info('In letter');
        return $this->view('mail.toAssignerCraeteTask');
    }
}
