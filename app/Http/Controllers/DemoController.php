<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class DemoController extends Controller
{   
    function DemoAction1():string {
        return redirect('/hello2');
    }
    
    function DemoAction2():string {
        return 'hello2';
    }
}
