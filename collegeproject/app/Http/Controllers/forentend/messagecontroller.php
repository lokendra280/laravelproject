<?php

namespace App\Http\Controllers\forentend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\message;

class messagecontroller extends Controller
{
    public function show(){
        return view('forentend.message');
    }
 

}
