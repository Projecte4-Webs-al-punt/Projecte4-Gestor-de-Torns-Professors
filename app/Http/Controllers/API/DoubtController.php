<?php

namespace App\Http\Controllers\API;

use App\Models\Doubt;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DoubtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doubts = Doubt::paginate(10);

       // $doubts = Doubt::where('id',Auth::user()>id);
        return response()->json($doubts);
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
        $teacher = $request->input("teacher", "");
        $subject = $request->input("subject", "");
        $message = $request->input("message", "");

        return $message;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Doubt::where('id',$id)->get();

    }
    public function status($status)
    {
        $doubt = Doubt::where('status', $status)->paginate(10);
        return response()->json($doubt);
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
        $doubt = Doubt::findOrFail($id);

        $doubt->delete();
    }

    public function reply(Request $request){
        $id = $request['id'];
        $reply = $request['reply'];
        $doubt = Doubt::find($id);

        $doubt->response = $reply;
        $doubt->status = 'Resolt';

        $doubt->save();
    }
    /*Juanjo ho podries haber fet amb un array una sola funci??, aqu?? hi ha molta redundancia*/

    public function countstudent()
    {
        return User::where('role', 'student')->count();
    }

    public function countdoubts()
    {
        return Doubt::count();
    }

    public function countdoubtsp()
    {
        return Doubt::where('status', 'Pendent')->count();
    }

    public function countdoubtsr()
    {
        return Doubt::where('status', 'Resolt')->count();
    }
}
