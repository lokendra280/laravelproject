<?php

namespace App\Http\Controllers\forentend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class warehousecontroller extends Controller
{
    public function warehouse()
    {
        return view('forentend.warehouse');
    }
}
