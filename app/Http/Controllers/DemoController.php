<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{   
    function DemoAction() {
        return view('Home');
    }
}
