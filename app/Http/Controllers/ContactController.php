<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function PHPUnit\Framework\isEmpty;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $message = $request->input('message');
        
        if (isEmpty($name) || isEmpty($email) || isEmpty($message)) {
            //
        } else {
            DB::table('contacts')->insert([
                'name' => $name,
                'email' => $email,
                'message' => $message
            ]);
        }

        return(view('contact')->with($data = "Ha hagut un missatge de error"));
    }
}
