<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class categoriesController extends Controller
{




    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showall(){

        $this->middleware('auth');
        $categories =  Category::all();

        return View('categoryManagement',compact('categories'));
    }

    public function add(Request $request)
    {
        if (Auth::check())
        {
            $this->validate($request,[
                'name'=>'required|max:250',
                ]);
            $category = new Category();
            $category->name = $request->name;
            $category->save();
            return redirect('/categories');
        }

        else
            return redirect('/login');
    }
}
