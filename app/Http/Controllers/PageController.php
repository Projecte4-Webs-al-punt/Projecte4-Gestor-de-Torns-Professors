<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view("profile");
    }

    public function doubts(Request $request)
    {
        $status=$request->get("status");
        return view("doubt.index", ["status"=>$status]);
    }
}
