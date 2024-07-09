<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{   
    function DemoAction(Request $request):string {
        if ($request->accepts(['text/html'])) {
            return "true";
        } else {
            return false;
        }
    }
}
