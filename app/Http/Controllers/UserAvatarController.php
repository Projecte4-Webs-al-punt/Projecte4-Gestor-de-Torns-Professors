<?php
 
 namespace App\Http\Controllers;

 use Illuminate\Http\Request;
 use Illuminate\Support\Facades\Auth;

 class UserAvatarController extends Controller
 {
     /**
      * Update the avatar for the user.
      *
      * @param  \Illuminate\Http\Request  $request
      * @return \Illuminate\Http\Response
      */
     public function upload(Request $request)
     {
         $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
           ]);
         $path = $request->file('image')->store('public/avatar');
         $user = Auth::user();
         $user->image = basename($path);
         $user->save();
 
        return view("profile");
     }
 }