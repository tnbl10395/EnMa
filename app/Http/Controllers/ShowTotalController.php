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
        $_count = $_history->count('History.idEngineer')
                           ->distinct()
                           ->groupBy('History.idEngineer');
        $_topEngineer = $_engineer->select('History.idEngineer','Engineer.engineerName',);
                                  ->join($_history,'Engineer.idEngineer','=','History.idEngineer')
                                  ->
    	return view('dashboard')->with([
    			'totalEngineer' => $_totalEngineer,
    			'totalTeam' => $_totalTeam,
    			'totalProject' => $_totalProject,
                'listEngineer' => $_listEngineer,
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