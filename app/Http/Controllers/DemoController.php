<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{   
    function DemoAction(Request $request):array {
        $pin = $request->header('pin');
        $city = $request->input('city');
        $postcode = $request->input('postcode');
        $name = $request->name;
        $age = $request->age;

        return array(
            "pin" => $pin,
            "city" => $city,
            "postcode" => $postcode,
            "name" => $name,
            "age" => $age,
        );

    }
}
