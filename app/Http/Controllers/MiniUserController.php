<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MiniUserController extends Controller
{
    public function IndexEM(){
    	return view('IndexEngiManage');
    }
    public function AddEm(){
    	return view('FormInsertEngi');
    }
    public function EditEm(){
    	return view('FormEditEngi');
    }
    public function IndexTm(){
        return view('team.IndexTeamManager');
    }
    public function AddTm(){
        return view('team.FormInsertTeam');
    }
    public function EditTm(){
        return view('team.FormEditTeam');
    }

}
