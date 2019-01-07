<?php

namespace App\Http\Controllers;

use App\Report;
use App\ReportUpdate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReportUpdateController extends Controller
{
    //


    public function __construct()
    {
        $this->middleware('auth');
    }

    public function addUpdate(Request $request)
    {
        if (Auth::check())
        {
          $id = Auth::user()->getId();
            $this->validate($request,[
            'commentInput'=>'required|max:250',
            'reportId'=>'required|max:250',
            'inputState'=>'required|max:1']);
        $reportUpdate = new ReportUpdate();
        $reportUpdate->comment = $request->commentInput;
        $reportUpdate->report_id = $request->reportId;
        $reportUpdate->user_id = $id;
        $reportUpdate->save();
        Report::where('id', $request->reportId)->update(['reportStatus' => $request->inputState]);
        return redirect('/dashboard/'.$request->reportId);
        }

        else
            return redirect('/login');
    }


}
