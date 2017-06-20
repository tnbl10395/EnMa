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
<<<<<<< HEAD

    public function IndexPro(){
    	return view('IndexProjectManagement');
    }
    public function AddPro(){
    	return view('FormAddPro');
    }
    public function EditPro(){
    	return view('FormEditPro');
    }
=======
    public function IndexTm(){
        return view('team.IndexTeamManager');
    }
    public function AddTm(){
        return view('team.FormInsertTeam');
    }
    public function EditTm(){
        return view('team.FormEditTeam');
    }

>>>>>>> master
}
