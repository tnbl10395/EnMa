<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Engineer;

class ShowEngiDashboardController extends Controller
{
    public function ShowEngineer(){
    	$_engineer = new Engineer();
    	$_list = $_engineer::all();
    	return view('table.totalEngineers')->with('list',$_list);
    }
}
