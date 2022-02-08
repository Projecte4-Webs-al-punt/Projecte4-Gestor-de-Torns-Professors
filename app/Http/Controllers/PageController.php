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
        return view("users.index");
    }

    public function profile()
    {
        return view("profile");
    }

}
