<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Team;
use App\Engineer;
use App\Technical;
use Illuminate\Support\Facades\DB;
use Software_Engineer_Management;
use App\json;

class ProjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function IndexPro(){

    	  $Project = Project::all();  
        $_totalTeam = $this->totalTeam();
        $_totalProject = $this->totalProject();
        $_totalEngineer = $this->totalEngineer();
        //$getDetail =  DB::table('Project')->where('idProject',$idProject)->get();
        // dd($_id);       
        return view('project.IndexProjectManagement',['Project' => $Project, 
                                                      'totalEngineer' => $_totalEngineer,
                                                      'totalTeam' => $_totalTeam,
                                                      'totalProject' => $_totalProject,
                                                 
                                                     ]);

    }
    public function AddPro(){
        $_totalTeam = $this->totalTeam();
        $_totalProject = $this->totalProject();
        $_totalEngineer = $this->totalEngineer();
        $getIdTeam = DB::table('Team')->select('idTeam','teamName')->where('status','=','New')->get();

        //echo $getIdTeam;

        $Techni = Technical::all();

    	return view('project.FormAddPro')->with(['totalEngineer' => $_totalEngineer,
                                                 'totalTeam' => $_totalTeam,
                                                 'totalProject' => $_totalProject,]) -> with(['getIdTeam' => $getIdTeam,
                                                 'Techni' => $Techni]);
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
        // dd($request->all());
        $pro -> idProject = $request -> idProject;
        $pro -> projectName = $request -> projectName;
        $pro -> status = $request -> status;
        $pro -> techSkill = $request -> TechSkill;
        $pro -> dateOfBegin = $request -> dateOfBegin;
        $pro -> dateOfEnd = $request -> dateOfEnd;
        $pro -> customer_code = $request -> customer_code;
        $pro -> idTeam = $request -> idTeam;
        $pro -> save();


  $updateIDTeam = DB::table('Team')->where('idTeam','=',$pro -> idTeam)->update(['status'=>'Assigned']);
  
       return redirect ('/ProjectManagement')-> with ('thbao','Add Successfully a new project!');
    }

    public function EditPro($idProject){
        $_totalTeam = $this->totalTeam();
        $_totalProject = $this->totalProject();
        $_totalEngineer = $this->totalEngineer();
        
       // $getIdTeam = Team::all();


        $Techni = Technical::all();
        $getIdTeam = DB::table('Team')->select('idTeam','teamName')->where('status','=','New')->get();


        return view('project.FormEditPro', ['oneProject'=>$idProject,
                                            'totalEngineer' => $_totalEngineer,
                                            'totalTeam' => $_totalTeam,
                                            'totalProject' => $_totalProject,])
                                     -> with(['getIdTeam' => $getIdTeam,'Techni'=>$Techni]); 


    }
    public function postEditPro(Request $request, $idProject){
        //$listPro = Project::find($idProject);


            // $list = DB::table('Project')->where('idProject', '=', $idProject)->get();
            // $list -> update($request->all());
            $project = new Project();
            $list = $project->where('idProject',$idProject)
                            ->update(['projectName' => $request->input('projectName'),
                                      'status' => $request->input('status'), 
                                      'techSkill' => $request->input('techSkill'), 
                                      'dateOfBegin' => $request->input('dateOfBegin'),
                                      'dateOfEnd' => $request->input('dateOfEnd'),
                                      'customer_code' => $request->input('customer_code'),
                                      'idTeam' => $request -> input ('idTeam')]);

             $updateIDTeam = DB::table('Team')->where('idTeam','=',$request->input('idTeam'))->update(['status'=>'Assigned']);
   

       return redirect ('/ProjectManagement')-> with ('thbaoEdit','Update successfully the project!');
        
    }
    public function DetailPro($_id) 
    {
       $getDetail = DB::table('Project')->select('idProject','projectName','status','techSkill','dateOfBegin','dateOfEnd','customer_code','idTeam')->where('idProject',$_id)->get();

      return $getDetail;
        
    }
    public function DelPro(Request $request, $id){

       $result =  DB::table('Project')->where('idProject',$id)->delete();
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