<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use Illuminate\Support\Facades\DB;

class TeamController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function IndexTm(){
        $datas = DB::table('Team')->get();
        return view('team.IndexTeamManager',['data'=>$datas]);
    }
    public function AddTm(){
        return view('team.FormInsertTeam');
    }

    public function AddTeam(Request $request){
        $datas = $request->all();
        $team = new Team;
        $team -> idTeam = $datas['idTeam'];
        $team -> teamName = $datas['teamName'];
        $team -> techSkill = $datas['techSkill'];
        $team->save();
        //return $this->IndexTm();
        return redirect('TeamManagement');
    }
    public function EditTm(){
        return view('team.FormEditTeam');
    }

    public function DelTm(Request $request, $id){
//       DB::table('Team')->where('idTeam',$id)->delete();
//        return redirect('TeamManagement');//because using ajax
       $result =  DB::table('Team')->where('idTeam',$id)->delete();
        return $result;
    }
}
