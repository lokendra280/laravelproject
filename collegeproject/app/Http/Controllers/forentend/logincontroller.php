<?php

namespace App\Http\Controllers\forentend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\login;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class logincontroller extends Controller
{
  public  function login(){
        return view('forentend.login');
    }
    public function loginsubmit(Request $request)
    {
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:5|max:12'
        ]);
    
        $logins = login::where('email', '=', $request->email)->first();
        if ($logins) {
    if (Hash::check($request->password, $logins->password)){
            $request->session()->put('loginId', $logins->id);
            return redirect('dashboard');
        }else{
            return back()->with('fail', 'password not matches.');
        }
        }else{
    return back()->with('fail', 'This email is not registered.');
        }
    }
    public function dashboard(){
        $data = array();
        if (Session::has('loginId')){
        $data = login::where('id', '=', Session::get('loginId'))->first();
        }
        return view('forentend.dashboard',compact('data'));
    }
    public function logout()
    {
        if (Session::has('loginId')){
            Session::pull('loginId');
            return redirect('admin');
        }
    }
}
