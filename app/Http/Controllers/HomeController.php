<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Teacher;
use App\Models\Subject;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * controlador de pruebas
     */
    public function teachers(Request $request)
    {
        //$teacherlist = $request->student()->id;
        //Subject::where('subject');
        //return Student::where('user_id', $request->user()->id)->get();
        $role = 'teacher';
        $nom = DB::table('users')
            ->select('name')
            ->where('role', $role)
            ->get();
        return $nom;
        /*DB::table('users')
        ->join('teachers','users.id','=','teachers.user_id')
        ->join('classgroups','classgroups.classGroup_id','=','classgroups.id')
        ->join('students','users.id','=','teachers.user_id')
        ->get();*/
    }
}
