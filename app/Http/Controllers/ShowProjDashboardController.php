<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ShowProjDashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
	public function ShowProject(){
		$_project = new Project();
		$_list = $_project->get();
		return view('table.totalProjects')->with('list',$_list);
	}
}
