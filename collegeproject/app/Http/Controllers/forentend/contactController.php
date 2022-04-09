<?php

namespace App\Http\Controllers\forentend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\message;

class contactcontroller extends Controller
{
    public function index ()
    {
        return view('forentend.contact');
    }
   
public function store(Request $request)
{
    $request->validate(
        [
            'firstname'=> 'required',
            'lastname'=> 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'

        ]);
    $message = new message;
    $message->fname = $request['firstname'];
    $message->lname = $request['lastname'];
    $message->email= $request['email'];
    $message->subject = $request['subject'];
    $message->message =$request['message'];
    $message->save();
}

// select queery
public function view(){
     $message = message::all();
     $data = compact('message');
    return view('forentend.customer-view')->with($data);
}
 
        public function delete($id)
        {
          $message =  message::find($id);
         
              if(!is_null($message)){
                  $message->delete();
             
          }
          return redirect('customer-view');

       }
  
}