<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{   
    function DemoAction() {
        return response('Hello1')
            ->header('key1', 'value1')
            ->header('key2', 'value2')
            ->header('key3', 'value3')
            ->header('key4', 'value4');
    }
}
