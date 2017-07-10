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
    // public function EditEm(){
    // 	$_totalTeam = $this->totalTeam();
    //     $_totalProject = $this->totalProject();
    //     $_totalEngineer = $this->totalEngineer();
    // 	return view('engineer.FormEditEngi')->with(['totalEngineer' => $_totalEngineer,
    //                                         'totalTeam' => $_totalTeam,
    //                                         'totalProject' => $_totalProject,]);
    // }
    public function EditEm($id){
      $_totalTeam = $this->totalTeam();
        $_totalProject = $this->totalProject();
        $_totalEngineer = $this->totalEngineer();
        $list = DB::table('Engineer')->where('idEngineer',$id)->first();
      return view('engineer.FormEditEngi')->with(['totalEngineer' => $_totalEngineer,
                                            'totalTeam' => $_totalTeam,
                                            'totalProject' => $_totalProject,'list'=>$list]);
  
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
       
  // Hadle multi Checkboxes Technical skill       
         $tech="";

      foreach ($request->input('technical') as $value => $key) {
            
             $t="";
            switch ($key) {
                        case '0':
                          $t="- PHP";
                          break;
                        case '1':
                          $t="- Java";
                          break;
                        case '2':
                          $t="- .Net";
                          break;
                        case '3':
                          $t="- Ruby";
                          break;
                        case '4':
                          $t="- Adroid";
                          break;
                        case '5':
                          $t="- IOS";
                          break;
                        case '6':
                          $t="- HTML";
                          break;  
                        case '7':
                          $t="- CSS";
                          break;  
                        case '8':
                          $t="- JS";
                          break;     
                        default:
                          # code...
                          break;
                      }
                      $tech = $tech." ".$t;          
 }


  // handle Experience       
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

        $photo  = $request->photo;
        if ($request->hasFile('photo')) {
        $namePhoto = $photo->getClientOriginalName();
        $photo->move('upload',$namePhoto);
        $engineer->avatar=$namePhoto; 
}else $namePhoto="";
        $engineer->engineerName="$name";
        $engineer->Address="$address";
        $engineer->Phone="$phone";
        $engineer->Email="$email";
        $engineer->TechSkill="2";
        $engineer->Experience="$ex";
        $engineer->TechSkill=$tech;
        $engineer->dateJoin=$newdatein;
        $engineer->outOfdate=$newdateout;
        $engineer->birthday=$newbirth;
       
      echo $tech;
       $engineer->save();
    return redirect('EngineerManagement');

    }

public function DelEng(Request $request, $id){
         $result =  DB::table('Engineer')->where('idEngineer',$id)->delete();
          return $result;
    }
public function EditEngineer(Request $request,$id){
      $name = $request->input('fullname');
      $birth = $request->input('birthday');
      $exp = $request->input('experience');
      $address= $request->input('address');
      $phone= $request->input('phone');
      $email= $request->input('email');
      $dateout= $request->input('dateout');
      $datein = $request->input('datejoin'); 
  

           //Handle Experience
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
      //  Handle Technical
              $tech="";

      foreach ($request->input('technical') as $value => $key) {
            
             $t="";
            switch ($key) {
                        case '0':
                          $t="- PHP";
                          break;
                        case '1':
                          $t="- Java";
                          break;
                        case '2':
                          $t="- .Net";
                          break;
                        case '3':
                          $t="- Ruby";
                          break;
                        case '4':
                          $t="- Adroid";
                          break;
                        case '5':
                          $t="- IOS";
                          break;
                        case '6':
                          $t="- HTML";
                          break;  
                        case '7':
                          $t="- CSS";
                          break;  
                        case '8':
                          $t="- JS";
                          break;     
                        default:
                          # code...
                          break;
                      }
                      $tech = $tech." ".$t;          
 }

      // Get photo
        $Editname = "";
         $photo  = $request->photo;
       if($request->hasFile('photo')){
        $Editname = $photo->getClientOriginalName();
        $photo->move('upload',$Editname);   
    
      }
      //Update database    
     $engineer = DB::table('Engineer')->where('idEngineer',$id);


   
        $engineer->update(['engineerName'=>$name,'Address'=>$address,'Phone'=>$phone,'Email'=>$email,'Experience'=>$ex,'dateJoin'=>$datein,'outOfdate'=>$dateout,'TechSkill'=>$tech,'avatar'=>$Editname,'birthday'=>$birth]);
        return redirect("EditEngineer/$id");
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
// ...