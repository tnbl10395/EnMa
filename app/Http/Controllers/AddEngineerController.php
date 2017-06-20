<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Engineer;
class AddEngineerController extends Controller
{
    public function AddEngineer(Request $_request){
    	$_data = $_request->all();

    	$_engineer = new Engineer();
    	$_engineer->idEngineer = $_data["id"];
    	$_engineer->engineerName = $_data["fullname"];
    	$_engineer->Address = $_data["address"];
    	$_engineer->Phone = $_data["phone"];
    	$_engineer->Email = $_data["email"];
    	$_engineer->TechSkill = $_data["technical"];
    	$_engineer->Experience = $_data["experience"];

    	$_engineer->save();
    	return view('IndexEngiManage');
    }
}
