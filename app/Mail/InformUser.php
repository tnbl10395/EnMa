<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class InformUser extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     *
     */
    public  $team, $project, $engineer;

    public function __construct($data)
    {
        $this->team = DB::table('Team')->select('teamName')->whereIn('idTeam',$data);
        $this->project = DB::table('Project')->select('projectName','techSkill','customer_code')->whereIn('idProject',$data);
        $this->engineer = DB::table('Engineer')->select('engineerName')->whereIn('idEngineer',$data);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from("agent.enclave@gmail.com")->view('email.inform')->subject('[Enclave] Assign Project');
    }
}
