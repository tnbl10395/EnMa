<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\DB;


class InformUser extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     *
     */
    public  $team, $project, $engineer, $idEngineer, $idHistory;

    public function __construct($teamName, $listNameEngineer, $idProject, $idHistory, $idEngineer)
    {
        $this->team = $teamName;
        $this->engineer = $listNameEngineer;
        $this->idEngineer = $idEngineer;
        $this->idHistory = $idHistory;
        $this->project=DB::table('Project')->select('projectName','techSkill', 'dateOfBegin','customer_code')->where('idProject',$idProject)->get();
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from("agent.enclave@gmail.com")->view('email.inform')->subject('[Company] Assign Project');
    }
}
