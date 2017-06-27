<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Engineer;
use App\Team;
use App\Project;
class ShowTotalController extends Controller
{
    public function total(){
    	$_engineer = new Engineer();
    	$_team = new Team();
    	$_project = new Project();

    	$_totalEngineer = $_engineer::count();
    	$_totalTeam = $_team::count();
    	$_totalProject = $_project::count();
    	return view('dashboard')->with([
    			'totalEngineer' => $_totalEngineer,
    			'totalTeam' => $_totalTeam,
    			'totalProject' => $_totalProject,
    		]);
    }
}
