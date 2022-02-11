<?php

namespace App\Http\Controllers\API;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function list()
    {
        $role = 'teacher';
        $nom = DB::table('users')
            ->select('id', 'name', 'lastname')
            ->where('role', $role)
            ->get();
        return response()->json($nom);
    }
}
