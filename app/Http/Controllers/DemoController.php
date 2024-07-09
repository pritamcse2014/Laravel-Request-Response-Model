<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{   
    function DemoAction(Request $request):array {
        $photoFile = $request->file('photo');
        $fileSize = filesize($photoFile);
        $fileType = fileType($photoFile);
        $originalName = $photoFile->getClientOriginalName();
        $tempFileName = $photoFile->getFilename();
        $extension = $photoFile->extension();
        return array(
            'fileSize' => $fileSize,
            'fileType' => $fileType,
            'originalName' => $originalName,
            'tempFileName' => $tempFileName,
            'extension' => $extension,
        );
    }
}
