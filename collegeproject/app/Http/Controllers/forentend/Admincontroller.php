<?php

namespace App\Http\Controllers\forentend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\Admin;
class Admincontroller extends Controller
{
    public function admin()
    {
        return view('forentend.adminform');
    }
    public function adminslogin(Request $request)
    {
        $request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);

        $admin = Admin::where('email', '=', $request->email)->first();
        if ($admin) {
            if (Hash::check($request->password, $admin->password)){
                    $request->session()->put('loginId', $admin->id);
                     return redirect('adminpage');
                }else{
                    return back()->with('fail', 'password not matches.');
                }
                }else{
            return back()->with('fail', 'This email is not registered.');
                }
            }
            public function logoutpage()
            {
                if (Session::has('loginId')){
                    Session::pull('loginId');
                    return redirect('admin');
                }
            }
        }


