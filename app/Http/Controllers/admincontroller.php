<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RegisterUser;

class admincontroller extends Controller
{
     public function datatransfer(Request $req){
        $user = new RegisterUser();
        $user->name = $req->username;
        $user->email = $req->useremail;
        $user->password = $req->userpass;
        $user->address = $req->useradd;
       
        
        $user->save();
        $message = "form has been submitted successfully";
        return view ('User.form', compact('message'));
}
}