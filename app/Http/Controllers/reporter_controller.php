<?php


namespace App\Http\Controllers;

use App\Report;
use App\ReportUpdate;
use Illuminate\Http\Request;
class reporter_controller extends Controller
{



    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showall(){

       $this->middleware('auth');
        $all_Reports = Report::all();
        return View('home',compact('all_Reports'));
    }



    public  function getDetails(Request $request){
        $this->middleware('auth');
        $id=$request->id;
        $report = Report::findOrFail($id);
        $updates= ReportUpdate::where('report_id',$id)->get();
        return    View('reportdetail')->with('report',$report)->with('updates',$updates);

    }

    public function refreshCaptcha()
    {
        return response()->json(['captcha' => captcha_img()]);
    }

}

