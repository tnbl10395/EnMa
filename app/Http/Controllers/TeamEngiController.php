<?php

namespace App\Http\Controllers;

use App\Mail\InformUser;
use Illuminate\Http\Request;
use App\Team;
use App\Project;
use App\Engineer;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TeamEngiController extends Controller
{
    //
    public function showEngineerAvailable(){
        $engi = DB::table('Engineer')->whereNull('busy')->orWhere('busy',0)->get();
        return view('team.listEngiAvailable',['engineers'=>$engi]);
    }

    public function addEngineerToTeam(Request $request){
//        print_r($request->all());
        $res = $request->all();
        $listEngineer = $res['listEngi'];
        $listNameEngineer = $res['listNameEngi'];
        $listEmailEngineer = $res['listEmailEngi'];
        $teamName = $res['nameTeam'];
        $projectName = $res['nameProject'];
        $idProject = ($res['idProject']!='0')?$res['idProject']:"";//not be null(idProject in DB is not null)
        $idTeam = $res['idTeam'];
        $dataToInsert=[];
        foreach($listEngineer as $engineer)
            array_push($dataToInsert,['idEngineer'=>$engineer,'idProject'=>$idProject,
                'idTeam'=>$idTeam,'role'=>'coder','DateOfJoining'=>Carbon::today()]);

//        print_r($dataToInsert);
        DB::table('Engineer')->whereIn('idEngineer',$listEngineer)->update(['busy'=>1]);
        DB::table('History')->insert($dataToInsert);
//        DB::table('History')->where('idHistory',30)->update(['expire'=>Carbon::today()]);
//        DB::table('History')->where('idHistory',30)->update(['expire'=>DB::raw('current_date')]);//ok


        $list_mail = DB::table('Engineer')->select('Email')->whereIn('idEngineer',$listEngineer);
        $mailable = new InformUser($dataToInsert);
        Mail::to($list_mail)->send($mailable);



    }

    public function removeEngineerFromTeam(Request $request){
        $res = $request->all();

        $result = DB::table("History")->where('idEngineer',$res['idEngineer'])->where('idTeam',$res['idTeam'])
            ->update(['expire'=>Carbon::today()]);
        if(!$result) return 0;
        $result = DB::table('Engineer')->where('idEngineer',$res['idEngineer'])->update(['busy'=>0]);
        if(!$result) return 0;
        return 1;

    }

    public function showCurrentEngineer($id){
        $teamMember = DB::table('History')->select('History.idEngineer','Engineer.engineerName','History.role')->
        join('Engineer','History.idEngineer','=','Engineer.idEngineer')->where('idTeam',$id)->whereNull('expire')->get();
        return view('team.listEngiCurrent')->with(['member'=>$teamMember]);
    }
}
