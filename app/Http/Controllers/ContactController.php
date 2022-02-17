<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Daw\Sessio;
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
        
        if (isset($name) || isset($email) || isset($message)) {
            DB::table('contacts')->insert([
                'name' => $name,
                'email' => $email,
                'message' => $message
            ]);
            session()->flash("messageSuccess", "Les dades s'han enviat correctament");
        } else {
            session()->flash("messageError", "Hi ha hagut un error en el enviament de dades");
        }

        return back();
        return(view('contact'));
    }
}
