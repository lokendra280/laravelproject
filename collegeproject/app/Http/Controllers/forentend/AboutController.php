<?php

namespace App\Http\Controllers\forentend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Aboutcontroller extends Controller
{
    public function index ()
    {
        return view('forentend.about');
    }
}
