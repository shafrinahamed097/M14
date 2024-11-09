<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    function DemoAction(Request $request): array{

        $photoFile=$request->file('photo');
        $fileSize=filesize($photoFile);
        $fileType=filetype($photoFile);
        $fileOriginalName=$photoFile->getClientOriginalName();
        $fileTempName=$photoFile->getFilename();
        $fileExtension=$photoFile->extension();
        
    

        return array(
            'fileSize'=>$fileSize,
            'fileType'=>$fileType,
            'fileOriginalName'=>$fileOriginalName,
            'fileTempName'=>$fileTempName,
            'fileExtension'=>$fileExtension 
        );
    }

 
}
