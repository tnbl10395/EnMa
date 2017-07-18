<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use App\Project;
use App\Engineer;
use App\lib\changeIDTeam;
use Illuminate\Support\Facades\DB;

class TeamController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function IndexTm(){
        $controller = new changeIDTeam();
        $datas = DB::table('Team')->get();
        $_totalTeam = $this->totalTeam();
        $_totalProject = $this->totalProject();
        $_totalEngineer = $this->totalEngineer();
        return view('team.IndexTeamManager',['data'=>$datas,
                                             'totalEngineer' => $_totalEngineer,
                                             'totalTeam' => $_totalTeam,
                                             'totalProject' => $_totalProject,
                                             'controllerTeam' => $controller]);
    }
    public function AddTm(){
        $_totalTeam = $this->totalTeam();
        $_totalProject = $this->totalProject();
        $_totalEngineer = $this->totalEngineer();
        $_listProject = DB::table('Project')->select('projectName')->get();//get list project Name
        return view('team.FormInsertTeam')->with(['totalEngineer' => $_totalEngineer,
                                                  'totalTeam' => $_totalTeam,
                                                  'totalProject' => $_totalProject,])->with(['projects'=>$_listProject]);
    }

    public function AddTeam(Request $request){
        $datas = $request->all();
        $team = new Team;
        // $team -> idTeam = $datas['idTeam'];
        $team -> teamName = $datas['teamName'];
//        $team -> techSkill = $datas['techSkill'];
        $team -> techSkill = (count($datas['techSkill'])<=1)?$datas['techSkill'][0]:implode(" - ",$datas['techSkill']);
        $team->save();
        //return $this->IndexTm();
        return redirect('TeamManagement')->with('notify','Add Successfully a new Team!');
    }
//    public function EditTm(){
        public function EditTm($id){
        $_totalTeam = $this->totalTeam();
        $_totalProject = $this->totalProject();
        $_totalEngineer = $this->totalEngineer();
        $team = DB::table('Team')->where('idTeam',$id)->first();
        $_listProject = DB::table('Project')->select('projectName')->get();//get list project Name
        $teamMember = DB::table('History')->select('History.idEngineer','Engineer.engineerName','History.role')->
                        join('Engineer','History.idEngineer','=','Engineer.idEngineer')->where('idTeam',$id)->get();
            //SELECT History.idEngineer, Engineer.engineerName , History.role from History INNER JOIN Engineer on History.idEngineer=Engineer.idEngineer where History.`idTeam` = 'T01'
        return view('team.FormEditTeam')->with(['totalEngineer' => $_totalEngineer,
                                                  'totalTeam' => $_totalTeam,
                                                  'totalProject' => $_totalProject,'team' =>$team,'member'=>$teamMember])->with(['projects'=>$_listProject]);
    }

    public function EditTeam(Request $request,$id){
        $datas = $request->all();
//        dd($datas);
//        $_team = DB::table('Team')->where('idTeam',$id)->first();
        $team = DB::table('Team')->where('idTeam',$id);
        $techSkill = (count($datas['techSkill'])<=1)?$datas['techSkill'][0]:implode(" - ",$datas['techSkill']);
        $team->update(['teamName'=>$datas['teamName'],'techSkill'=>$techSkill]);
//        return redirect("EditTeam/$id");
        return redirect('TeamManagement')->with('notify','Update Successfully the Team!');
    }

    public function DelTm(Request $request, $id){
//       DB::table('Team')->where('idTeam',$id)->delete();
//        return redirect('TeamManagement');//because using ajax
         $result =  DB::table('Team')->where('idTeam',$id)->delete();
          return $result;
    }
    public function totalEngineer(){
      $_engineer = new Engineer();
      $_totalEngineer = $_engineer->count();
      return $_totalEngineer;
    }

    public function totalProject(){
      $_project = new Project();
      $_totalProject = $_project->count();
      return $_totalProject;
    }

    public function totalTeam(){
      $_team = new Team();
      $_totalTeam = $_team->count();
      return $_totalTeam;
    }
}
