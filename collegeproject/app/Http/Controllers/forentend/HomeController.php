<?php

namespace App\Http\Controllers\forentend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    public function index ()
    {
        return view('forentend.index');
    }
}
