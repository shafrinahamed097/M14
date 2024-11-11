<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    function FileBinary(){
        $filePath="upload/image/Screenshot_6.png";
        return response()->file($filePath);

    }

   function DemoAction(){
   return view('page.Home');
   }
 
}
