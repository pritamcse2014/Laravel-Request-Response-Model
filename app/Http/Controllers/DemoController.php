<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{   
    function DemoAction(Request $request):array {
        return $request->header();
    }
    
    function DemoAction2(Request $request):string {
        $name = $request->header('name');
        $age = $request->header('age');

        return "My Name is: $name and My Age is: $age";
    }
}
