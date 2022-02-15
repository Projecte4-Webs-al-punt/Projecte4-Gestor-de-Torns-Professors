<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function index()
    {
        return view("home");
    }
    public function about()
    {
        return view("about");
    }
    public function contact()
    {
        return view("contact");
    }
    /*Administració*/

    public function admin()
    {
        return view("dashboard");
    }

    /*Tests */

    public function test()
    {
        return view("test");
    }

    public function profile()
    {
        $user = Auth::user();

        return view("profile")->with('user',$user);
    }

    public function question()
    {
        return view("question");
    }

    public function questionlist()
    {
        return view("questionlist");
    }

    public function doubts(Request $request)
    {
        $status=$request->get("status");
        return view("doubt.index", ["status"=>$status]);
    }
}
