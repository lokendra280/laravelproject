<?php

namespace App\Http\Controllers\forentend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class adminpagecontroller extends Controller
{
    public function adminpage()
    {
        return view('forentend.admin');
    }
}
