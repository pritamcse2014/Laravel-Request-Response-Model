<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{   
    function DemoAction(Request $request):array|null|int|bool|string {
        // return null;
        // return "Bangladesh";
        // return 2014;
        // return true;
        // return array('P', 'R', 'I', 'T', 'A', 'M');
        // return array(
        //     'name' => 'Pritam Kumar Kundu',
        //     'ID' => 190322014,
        //     'city' => 'Dhaka',
        // );

        $myArray = array(
                array (
                    'name' => 'Pritam Kumar Kundu',
                    'ID' => 190322014,
                    'city' => 'Dhaka',
                ),
                
                array (
                    'name' => 'Prity Rani Datta',
                    'ID' => 190322015,
                    'city' => 'Rajshahi',
                ),
                
                array (
                    'name' => 'Priya Rani Sarker',
                    'ID' => 190322016,
                    'city' => 'Dhaka',
                ),
            );
            return $myArray;
    }
}
