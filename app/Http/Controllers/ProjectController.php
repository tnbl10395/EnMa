<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Team;
use App\Engineer;
use Illuminate\Support\Facades\DB;
use Software_Engineer_Management;
use App\json;

class ProjectController extends Controller
{
    public function IndexPro(){
    	$Project = Project::all();  
        $_totalTeam = $this->totalTeam();
        $_totalProject = $this->totalProject();
        $_totalEngineer = $this->totalEngineer();
        return view('project.IndexProjectManagement',['Project' => $Project, 
                                                      'totalEngineer' => $_totalEngineer,
                                                      'totalTeam' => $_totalTeam,
                                                      'totalProject' => $_totalProject,]);
    }
    public function AddPro(){
        $_totalTeam = $this->totalTeam();
        $_totalProject = $this->totalProject();
        $_totalEngineer = $this->totalEngineer();
    	return view('project.FormAddPro')->with(['totalEngineer' => $_totalEngineer,
                                                 'totalTeam' => $_totalTeam,
                                                 'totalProject' => $_totalProject,]);
    }
    public function postAddPro(Request $request)
    {
       // $this -> validate($request,
         //   [
                // 'idProject' => 'required|min:2|max:50'
           // ],
           // [
                // 'idProject.required' => 'id khong duoc de trong',
                // 'idProject.min' => 'toi thieu la 2',
                // 'idProject.max' => 'toi da la 50 ki tu',
            //]);
        $pro = new Project;
        $pro -> idProject = $request -> idProject;
        $pro -> projectName = $request -> projectName;
        $pro -> status = $request -> status;
        $pro -> techSkill = $request -> techSkill;
        $pro -> dateOfBegin = $request -> dateOfBegin;
        $pro -> dateOfEnd = $request -> dateOfEnd;
        $pro -> customer_code = $request -> customer_code;
        $pro -> save();
 
        return redirect ('/ProjectManagement')-> with ('thbao','Them thanh cong Project');
    }

    public function EditPro($idProject){
        $_totalTeam = $this->totalTeam();
        $_totalProject = $this->totalProject();
        $_totalEngineer = $this->totalEngineer();
       // $oneProject = DB::table('Project')->where('idProject', '=', $idProject)->get();

       // echo $oneProject;


        //return view ('/project.FormEditPro',['Project' => $oneProject]);
        // return view ('/project.FormAddPro');

        //return redirect ('dashboard',['oneProject' => $oneProject]);
        // return redirect()->route('/EditProject/{idProject}', ['oneProject' => $oneProject ]);

        //return redirect('/ProjectManagement');
        //->action('ProjectController@EditPro');
        return view('project.FormEditPro', ['oneProject'=>$idProject,
                                            'totalEngineer' => $_totalEngineer,
                                            'totalTeam' => $_totalTeam,
                                            'totalProject' => $_totalProject,]);

    }
    public function postEditPro(Request $request, $idProject){
        
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