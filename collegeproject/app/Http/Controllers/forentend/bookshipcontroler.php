<?php

namespace App\Http\Controllers\forentend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class bookshipcontroler extends Controller
{
    public function bookship()
    {
        return view('forentend.bookshiping');
    }
}
