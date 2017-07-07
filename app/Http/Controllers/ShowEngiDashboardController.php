<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Engineer;
use App\lib\changeIDName;

class ShowEngiDashboardController extends Controller
{
    public function ShowEngineer(){
    	$_changeIDName = new changeIDName();
    	$_engineer = new Engineer();
    	$_list = $_engineer->get();
    	return view('table.totalEngineers')->with(['list' => $_list, 
    											   'controller' => $_changeIDName]);
    }

}
