<?php

namespace App\Http\Controllers;

use App\Report;
use App\ReportUpdate;
use Illuminate\Http\Request;

class HomeController extends Controller
{


    public function reporter()
    {
        return view('reporter');
    }
    public function home()
    {
        return view('welcome');
    }
    public function track()
    {
        return view('Track');
    }

    public function addReport(Request $request)
    {   $this->validate($request,[
        'reporter_name'=>'required|max:200',
        'reporter_email'=>'required|max:250',
        'branch_section'=>'required|max:1',
        'report_title'=>'required|max:250',
        'report_description'=>'required|max:250']);
        $report = new Report();
        $report->reporterName= $request->reporter_name;
        $report->reporterEmail= $request->reporter_email;
        $report->reporterSection=$request->branch_section;
        $report->reportTitle= $request->report_title;
        $report->reportStatus= "O";
        $report->reportDescription= $request->report_description;
        $report->save();
        $id = $report->id;
        return redirect('/repo/orderno/'.$id);
    }

    public  function getDetails(Request $request){
        $this->validate($request,[
            'reporter_email'=>'required|max:200',
            'repoid'=>'required|max:250',]);
        $id=$request->repoid;
        $email=$request->reporter_email;
        $report =  Report::findOrFail($id);
        if($report->reporterEmail==$email){
        $updates= ReportUpdate::where('report_id',$id)->get();
        return    View('reportTracking')->with('report',$report)->with('updates',$updates);}
        else
            return view('Track');


    }

    public function reportno(Request $request)
    {
        $id=$request->id;
        $op =Report::findOrFail($id);
        return View('reporterno',compact('op'));
    }


}
