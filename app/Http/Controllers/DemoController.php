<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    function DemoAction(Request $request):string {
        $name = $request->input('name');
        $age = $request->input('age');
        return "My Name is: $name and My Age is: $age";
    }
    
    function DemoAction2(Request $request):array {
        return $request->input();
    }
    
    function DemoAction3(Request $request):array {
        return $request->input();
    }
}
