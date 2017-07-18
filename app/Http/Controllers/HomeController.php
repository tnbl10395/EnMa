<?php

namespace App\Http\Controllers;

use App\Mail\SendBirthdayMail;
use Illuminate\Http\Request;
use App\Engineer;
use App\Team;
use App\Project;
use App\lib\changeIDName;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Mail\Mailer;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public $engineer;

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
   

    public function index(){
        $_engineer = new Engineer();
        $_team = new Team();
        $_project = new Project();
        $_changeIDName = new changeIDName();

        $_totalTeam = $this->totalTeam($_team);
        $_totalProject = $this->totalProject($_project);
        $_totalEngineer = $this->totalEngineer($_engineer);

        $_listEngineer = $this->listEngineer($_engineer);
        $_topEngineer = $this->topEngineer($_engineer);

        $_newProject = $this->newProject($_project);

        $_newEngineerNoti = $this->newEngineerNotification($_engineer);
        $_newProjectNoti = $this->newProjectNotification($_project);
        $_birthday = $this->birthdayNotification($_engineer);

      // dd($_newProjectNoti);



        return view('dashboard')->with([
            'totalEngineer' => $_totalEngineer,
            'totalTeam' => $_totalTeam,
            'totalProject' => $_totalProject,
            'listEngineer' => $_listEngineer,
            'topEngineer' => $_topEngineer,
            'newProject' => $_newProject,
            'controller' => $_changeIDName,
            'birthday' => $_birthday,
            'newEngineerNoti' => $_newEngineerNoti,
            'newProjectNoti' => $_newProjectNoti,


        ]);
    }
    
    public function topEngineer($_engineer){
      $_topEngineer = $_engineer->join('History','Engineer.idEngineer','=','History.idEngineer')
                                ->selectRaw('History.idEngineer, Engineer.engineerName, Engineer.TechSkill, Engineer.Experience, Engineer.avatar, COUNT(History.idEngineer) as total')
                                ->distinct('History.idEngineer')
                                ->groupBy('History.idEngineer')
                                ->orderBy('total','desc')
                                ->take(5)
                                ->get();
      return $_topEngineer;
    }
    public function statisticEngineer($_engineer){
      // $_statisticEngineer = $_engineer->
      //return $_statisticEngineer;
    }

    public function newProject($_project){
      $_newProject = $_project->selectRaw('idProject, projectName')
                              ->orderBy('dateOfBegin','desc')
                              ->take(6)
                              ->get();
      return $_newProject;
    }


    public function newProjectNotification($_project){
      $_newProjectNoti = $_project->selectRaw('idProject,projectName,dateOfBegin')
                                  ->whereRaw("DATEDIFF(NOW(),dateOfBegin) < 3")
                                  ->get();
      return $_newProjectNoti;
    }

    public function newEngineerNotification($_engineer){
      $_newEngineerNoti = $_engineer->selectRaw('engineerName')
                                ->whereRaw("DATEDIFF(NOW(),dateJoin) < 3")
                                ->get();
      return $_newEngineerNoti;
    }

    public function birthdayNotification($_engineer)
    {

        $_birthday = $_engineer->selectRaw('engineerName')->where('status', 1)
            ->whereDay('birthday', Carbon::NOW()->day)
            ->whereMonth('birthday', Carbon::NOW()->month)
            ->get();


        //config(['mail.driver' => 'smtp', 'mail.host' => 'smtp.gmail.com', 'mail.port' => 587, 'mail.username' => 'agent.enclave@gmail.com', 'mail.password' => 'enclave12345', 'mail.encryption' => 'tls']);


        $datas_email_db = DB::table('Engineer')->select('Email')->where('status', 1)->where('birthday_mail', 0)
            ->whereDay('birthday', Carbon::NOW()->day)
            ->whereMonth('birthday', Carbon::NOW()->month)->get();
        $data_email = [];
        foreach ($datas_email_db as $data_email_db) array_push($data_email, $data_email_db->Email);

//            $_engineer1 = $_engineer
//                ->whereDay('birthday', Carbon::NOW()->day)
//                ->whereMonth('birthday', Carbon::NOW()->month)
//                ->get();

        if ($data_email) {

        $mailable = new SendBirthdayMail($_engineer);
        Mail::to($data_email)->send($mailable);
        DB::table('Engineer')->update(['birthday_mail' => 0]);
        DB::table('Engineer')->where('status', 1)
            ->whereDay('birthday', Carbon::NOW()->day)
            ->whereMonth('birthday', Carbon::NOW()->month)->update(['birthday_mail' => 1]);
    }

            return $_birthday;
    }

    public function listEngineer($_engineer){
      $_listEngineer = $_engineer->get();
      return $_listEngineer;
    }

    public function totalEngineer($_engineer){
      $_totalEngineer = $_engineer->count();
      return $_totalEngineer;
    }

    public function totalProject($_project){
      $_totalProject = $_project->count();
      return $_totalProject;
    }

    public function totalTeam($_team){
      $_totalTeam = $_team->count();
      return $_totalTeam;
    }
}
