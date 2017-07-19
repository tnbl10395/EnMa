<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Engineer;
use App\lib\changeColorStatus;
use App\lib\changeIDName;
class ShowAvailableEngineerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }	
    public function ShowAvailableEngineer(){
      $_changeColor = new changeColorStatus();
      $_changeIDEngi = new changeIDName();
      $_engineer = new Engineer;
      $_staticEngineer = $_engineer->where("busy","0")->get();
      return view("table.availableEngineer")->with(["listEngineer"=>$_staticEngineer,
      												                      "controllerIDEngi"=>$_changeIDEngi,
                                                    "controllerColor"=>$_changeColor]);
    }
}
