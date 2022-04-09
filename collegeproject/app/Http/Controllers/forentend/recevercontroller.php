<?php

namespace App\Http\Controllers\forentend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\receiver;

class recevercontroller extends Controller
{
    public function receiver()
    {
        return view('forentend.recever');
    }
    public function sender(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'companyname'=>'required',
            'city'=>'required',
            'street'=>'required',
            'postalcode'=>'required',
            'email'=>'required|email|unique:logins',
            'phonenumber'=>'required|unique:logins'
        ]);
        //inser queery
        $sender = new receiver;
        $sender->name=$request->name;
        $sender->companyname=$request->companyname;
        $sender->city=$request->city;
        $sender->street=$request->street;
        $sender->postalcode=$request->postalcode;
        $sender->email=$request->email;
        $sender->phonenumber=$request->phonenumber;
        $result=$sender->save();
        return redirect('dashboard');
    }
    
    public function receiverdata()
{
    $receiver = receiver::all();
    $data = compact('receiver');
   return view('forentend.shipingdetail')->with($data);
}
}
