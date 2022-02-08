<?php
 
 namespace App\Http\Controllers;

 use App\Models\User;
 use Illuminate\Http\Request;
 use Illuminate\Support\Facades\Storage;
 
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
         
         $path = $request->file('image')->store('public');
 
         return $path;
     }
 }