<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Team;
use App\Engineer;
use Illuminate\Support\Facades\DB;
use Software_Engineer_Management;
use App\json;

class EngineerController extends Controller
{	

  public function __construct()
  {
    $this->middleware('auth');
  }
  

	public function IndexEM(){ 
        $_list = Engineer::all();
        $_totalTeam = $this->totalTeam();
        $_totalProject = $this->totalProject();
        $_totalEngineer = $this->totalEngineer();
        return view('engineer.IndexEngiManage')->with(['list' => $_list,
								           	'totalEngineer' => $_totalEngineer,
                                            'totalTeam' => $_totalTeam,
                                            'totalProject' => $_totalProject]);
    }
    public function AddEm(){
    	$_totalTeam = $this->totalTeam();
        $_totalProject = $this->totalProject();
        $_totalEngineer = $this->totalEngineer();
    	return view('engineer.FormInsertEngi')->with(['totalEngineer' => $_totalEngineer,
                                            'totalTeam' => $_totalTeam,
                                            'totalProject' => $_totalProject,]);
    }
    public function EditEm(){
    	$_totalTeam = $this->totalTeam();
        $_totalProject = $this->totalProject();
        $_totalEngineer = $this->totalEngineer();
    	return view('engineer.FormEditEngi')->with(['totalEngineer' => $_totalEngineer,
                                            'totalTeam' => $_totalTeam,
                                            'totalProject' => $_totalProject,]);
    }


     public function AddEngineer(Request $request){
 // Get date from request   
         $name = $request->input('fullname');
         $birth = $request->input('birthday');
         $exp = $request->input('experience');
         $address= $request->input('address');
         $phone= $request->input('phone');
         $email= $request->input('email');
         $dateout= $request->input('dateout');
         $datein = $request->input('datein');   
// handle experience       
             $ex="";
     	 switch ($exp) {
	         case '0':
	            $ex="No experience";
	             
	             break;
	         case '1':
	            $ex="1 year";
	                          break;
	         case '2':
	            $ex="More 2 years";
	                          break;  
	         case '3':
	            $ex="More 5 years";
	             
	             break;
	         case '4':
	            $ex="More 10 years";
	             # code...
	             break;        
	         default:
	             # code...
	             break;
     }
  // Convert date
        $newbirth = date("Y-m-d", strtotime($birth));
        $newdateout = date("Y-m-d", strtotime($dateout));
        $newdatein = date("Y-m-d", strtotime($datein));
 // Save data to DataBase                
        $engineer = new Engineer();
        $engineer->engineerName="$name";
        $engineer->Address="$address";
        $engineer->Phone="$phone";
        $engineer->Email="$email";
        $engineer->TechSkill="2";
        $engineer->Experience="$ex";
        $engineer->dateJoin=$newdatein;
        $engineer->outOfdate=$newdateout;
        $engineer->birthday=$newbirth;
        $engineer->save();
//     return view('engineer.FormInsertEngi');
        echo "luu thanh cong";
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
