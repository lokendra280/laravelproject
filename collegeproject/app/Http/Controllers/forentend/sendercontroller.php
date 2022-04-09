<?php

namespace App\Http\Controllers\forentend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\senderinfo;
use App\Models\receiver;


class sendercontroller extends Controller
{
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
        $sender = new senderinfo;
        $sender->name=$request->name;
        $sender->companyname=$request->companyname;
        $sender->city=$request->city;
        $sender->street=$request->street;
        $sender->postalcode=$request->postalcode;
        $sender->email=$request->email;
        $sender->phonenumber=$request->phonenumber;
        $result=$sender->save();
        return redirect('receiverinfo');
    }
      
public function senders()
{
    $senderinfo = senderinfo::all();
    $data = compact('senderinfo');
   return view('forentend.shipingdetail')->with($data);
} 
public function receiver()
{
    $receiverinfo = receiver::all();
    $data = compact('receiver');
   return view('forentend.shipingdetail')->with($data);
} 

}
