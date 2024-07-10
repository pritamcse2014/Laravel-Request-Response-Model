<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{   
    function FileBinary() {
        $filePath = "upload/image/circle.png";
        return response()->file($filePath);
    }
    
    function FileDownload() {
        $filePath = "upload/image/circle.png";
        return response()->download($filePath);
    }
}
