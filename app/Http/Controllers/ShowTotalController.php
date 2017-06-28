<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Engineer;
use App\Team;
use App\Project;
use App\History;
class ShowTotalController extends Controller
{
    public function total(){
    	$_engineer = new Engineer();
    	$_team = new Team();
    	$_project = new Project();
        $_history = new History();

    	$_totalEngineer = $_engineer->count();
    	$_totalTeam = $_team->count();
    	$_totalProject = $_project->count();
  
        $_listEngineer = $_engineer->get();
        $_topEngineer = $_engineer->join('History','Engineer.idEngineer','=','History.idEngineer')
                                  ->selectRaw('History.idEngineer, Engineer.engineerName, Engineer.TechSkill, Engineer.Experience, COUNT(History.idEngineer) as total')
                                  ->distinct('History.idEngineer')
                                  ->groupBy('History.idEngineer')
                                  ->orderBy('total','desc')
                                  ->take(5)
                                  ->get();
                     
    	return view('dashboard')->with([
    			'totalEngineer' => $_totalEngineer,
    			'totalTeam' => $_totalTeam,
    			'totalProject' => $_totalProject,
          'listEngineer' => $_listEngineer,
          'topEngineer' => $_topEngineer
    		]);
    }
}
// SELECT h.idEngineer, e.engineerName, COUNT(h.idEngineer) numbers 
// FROM Engineer AS e
// INNER JOIN History AS h 
// ON e.idEngineer = h.idEngineer
// GROUP BY idEngineer
// ORDER BY numbers DESC
// LIMIT 5