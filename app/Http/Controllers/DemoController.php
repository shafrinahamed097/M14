<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    function DemoAction(Request $request): array | null | int| bool | string{

     
 
    $myArray=array(
        array(
            'city'=>'Dhaka',
            'country'=>'Bangladesh',
            'population'=>10000000
        ),
        array(
            'city'=>'Dhaka',
            'country'=>'Bangladesh',
            'population'=>10000000
        ),

        
    );
     

      return $myArray;
        
    }

 
}
