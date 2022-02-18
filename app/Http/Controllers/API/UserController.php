<?php

namespace App\Http\Controllers\API;

use App\Http\Services\TutoryApiService;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

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

        dd($name . " " . $lastname . " " . $email . " " . $phone . " " . $modality);
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
    public function obtain(Request $request)
    {
        //Obtenim el rang d'usuaris a provar

        $studentsCount['minUsers'] = User::all()->where('role','student')->min('id');

        $studentsCount['maxUsers'] = Student::all()->count();

        $studentsCount['maxUsers'] = $studentsCount['maxUsers'] + $studentsCount['minUsers'] - 1;

        $idnumber = TutoryApiService::getNumber($studentsCount['minUsers'],$studentsCount['maxUsers']);

        $nomusuari =  User::where('id', $idnumber)->first();

        return $nomusuari;
    }
}
