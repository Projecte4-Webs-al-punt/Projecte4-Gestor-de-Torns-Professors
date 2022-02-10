<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Update the avatar for the user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'nom' => 'required|'
        ]);
        //el nombre del avatar es el id de usuario para que en caso de que se cambie 
        //el avatar se sobreescriba en lugar de ser guardado a parte
        $path = $request->file('image')->storeAs(
            'public/avatar',
            $request->user()->id
        );
        //$path = $request->file('image')->store('public/avatar');
        $user = Auth::user();
        $user->image = basename($path);
        $user->save();

        return view("profile");
}
