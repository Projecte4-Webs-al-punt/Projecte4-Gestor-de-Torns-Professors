<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class administracioController extends Controller
{
    public function admin()
    {
        return view("dashboard");
    }
}
