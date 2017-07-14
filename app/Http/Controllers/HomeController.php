<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Engineer;
use App\Team;
use App\Project;
use App\lib\changeIDName;
use Carbon\Carbon;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
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

        $_newEngineer = $this->newEngineerNotification($_engineer);

        $_birthday = $this->birthdayNotification($_engineer);

      // dd($_newEngineer);


        return view('dashboard')->with([
            'totalEngineer' => $_totalEngineer,
            'totalTeam' => $_totalTeam,
            'totalProject' => $_totalProject,
            'listEngineer' => $_listEngineer,
            'topEngineer' => $_topEngineer,
            'newProject' => $_newProject,
            'controller' => $_changeIDName,
            'birthday' => $_birthday,
            'newEngineer' => $_newEngineer

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
      return $_statisticEngineer;
    }

    public function newProject($_project){
      $_newProject = $_project->selectRaw('idProject, projectName')
                              ->orderBy('dateOfBegin','desc')
                              ->take(6)
                              ->get();
      return $_newProject;
    }


    public function newEngineerNotification($_engineer){
      $_newEngineer = $_engineer->selectRaw('engineerName')
                                ->whereRaw('DATEDIFF(NOW(),dateJoin) = 3')
                                ->get();
      return $_newEngineer;
    }

    public function birthdayNotification($_engineer){
      $_birthday = $_engineer->selectRaw('engineerName')
                             ->whereDay('birthday',Carbon::NOW()->day)
                             ->whereMonth('birthday',Carbon::NOW()->month)
                             ->get();
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
