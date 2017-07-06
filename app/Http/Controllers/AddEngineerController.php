<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Engineer;
class AddEngineerController extends Controller
{
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
}
