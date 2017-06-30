<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;

class ShowTeamDashboardController extends Controller
{
	public function ShowTeam(){
		$_team = new Team();
		$_list = $_team->get();
		return View('table.totalTeams')->with('list',$_list);
	}
}
