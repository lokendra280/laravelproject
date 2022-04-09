<?php

namespace App\Http\Controllers\forentend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\login;
use Illuminate\Support\Facades\Hash;

class registercontroller extends Controller
{
    public function formsubmit()
    {
        return view('forentend.Registration');
    }
    public function createsubmit(Request $request)
    {
        // validate code
        $request->validate([
            'firstname'=>'required|min:3|max:20|alpha',
            'lastname'=>'required',
            'email'=>'required|email|unique:logins',
            'phonenumber'=>'required|unique:logins',
            'password'=>'required|min:5|max:12'
        ]
    );

        $login = new login;
        $login->firstname=$request->firstname;
        $login->lastname=$request->lastname;
        $login->email=$request->email;
        $login->phonenumber=$request->phonenumber;
        $login->password=Hash::make($request->password);
       
        $result=$login->save();
        if($result)
        {
            return back()->with('sucess','you have registered sucessfully');
        }
        else
        {
            return back()->with('fail','something Wrong');
        }
     
    }
  
    public function registrationdetail(){
        return view('forentend.Registrationdetail');
    }
    public function viewregdetail()
    {
        $message = login::all();
         $data = compact('message');
            return view('forentend.Registrationdetail')->with($data);
    }
}
