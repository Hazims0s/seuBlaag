<?php

namespace App\Http\Controllers;

use App\Branch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class branchesController extends Controller
{

    public function showall(){

        $this->middleware('auth');
        $branches =  Branch::all();

        return View('branchManagement',compact('branches'));
    }

    public function add(Request $request)
    {
        if (Auth::check())
        {
            $this->validate($request,[
                'name'=>'required|max:250',
            ]);
            $branch = new Branch();
            $branch->name = $request->name;
            $branch->save();
            return redirect('/branches');
        }

        else
            return redirect('/login');
    }
    //
}
