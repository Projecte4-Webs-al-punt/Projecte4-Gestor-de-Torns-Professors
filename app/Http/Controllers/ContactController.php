<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $message = $request->input('message');
        DB::table('contacts')->insert([
            'name' => $name,
            'email' => $email,
            'message' => $message
        ]);
        return(view('contact')->with($data = "Ha hagut un missatge de error"));
    }
}
