<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {

        $users = User::where('role','student')->paginate(10);

        return response()->json($users);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = $request->input("name", "");
        $lastname = $request->input("lastname", "");
        $email = $request->input("email", "");
        $phone = $request->input("phone", "");
        $modality = $request->input("modality", "");

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'string', 'max:11'], 
            'modality' => ['string', 'max:255']
        ]);

        $user = new User;
        $user->name = $name;
        $user->lastname = $lastname;
        $user->email = $email;
        $user->phone = $phone;
        $user->modality = $modality;
        $user->role = 'student';
        $user->password = Hash::make('12345678');
        $user->remember_token = Str::random(10);
        $user->save();
        
        $usernew = User::where('role', 'student')->where('email', $email)->get();
        
        foreach ($usernew as $item) {
            DB::table('students')->insert([
                'user_id' => $item->id
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return User::where("id", $id)->get();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $name = $request->input("nomalumn", $user->name);
        $lastname = $request->input("cognomsalumn", $user->lastname);
        $email = $request->input("emailalumn", $user->email);
        $phone = $request->input("phonealumn", $user->phone);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);

        $user->delete();
    }
}
