<?php

namespace App\Mail;
use Carbon\Carbon;
use App\Engineer;
use App\Http\Controllers\HomeController;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendBirthdayMail extends Mailable
{
    use Queueable, SerializesModels;

    public $engineer;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Engineer $engineer)
    {
        $this->engineer=$engineer->select('engineerName')->where('status',1)->where('birthday_mail',0)
            ->whereDay('birthday', Carbon::NOW()->day)
            ->whereMonth('birthday', Carbon::NOW()->month)
            ->get();;

    }


    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this->from("agent.enclave@gmail.com")->view('email.birthday');


    }
}
