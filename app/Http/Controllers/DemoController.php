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
    $name="token";
    $value="123XYZ";
    $minutes=120;
    $path="/";
    $domain=$_SERVER['SERVER_NAME'];
    $secure=false;
    
    $httpOnly=true;

    return response("Hi")->cookie($name,$value,$minutes,$path,$domain,$secure,$httpOnly);
   }
 
}
