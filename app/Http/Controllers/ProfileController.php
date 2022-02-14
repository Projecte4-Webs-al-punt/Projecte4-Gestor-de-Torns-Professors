<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ProfileRequest;

class ProfileController extends Controller
{
    /**
     * Update the avatar for the user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function update(ProfileRequest $request)
    {
        //$path = $request->file('image')->store('public/avatar');
        
        $user = Auth::user();
        if($request->file('image') != null){
        $user->image = basename($request->file('image')->storeAs(
            'public/avatar',
            $request->user()->id
        ));
    }
        $user->name = $request->input('name');
        $user->lastname = $request->input('lastname');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        $user->save();

        return view("profile");
    }
}
