<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Services\TutoryApiService;
use App\Models\User;
use App\Models\Doubt;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate();

        return view ('users.index',[
            'users' => $users
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexStudent()
    {
        return Doubt::where('student_id', Auth::user()->id)->get();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexStudentAdd(Request $request)
    {
        $teacher = $request->input("teacher", "");
        $subject = $request->input("subject", "");
        $message = $request->input("message", "");

        $doubt = new Doubt;
        $doubt->matter = $subject;
        $doubt->message = $message;
        $doubt->student_id = Auth::user()->id;
        $doubt->teacher_id = $teacher;

        $doubt->save();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id)->first();

        $user -> delete();

        return redirect('/users');
    }

    public function obtain()
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
