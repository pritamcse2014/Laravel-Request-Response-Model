<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{   
    function DemoAction(Request $request):bool {
        $photoFile = $request->file('photo');
        // storage directory photo file upload
        $photoFile->storeAs('upload',$photoFile->getClientOriginalName());
        // public directory photo file upload
        $photoFile->move(public_path('upload'),$photoFile->getClientOriginalName());
        return true;
    }
}
