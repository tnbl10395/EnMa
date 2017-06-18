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
}
