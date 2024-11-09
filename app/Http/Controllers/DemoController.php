<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    function DemoAction(Request $request): bool{

     

        $photoFile = $request->file('photo');
        $photoFile->storeAs('upload', $photoFile->getClientOriginalName());
        $photoFile->move(public_path('upload'), $photoFile->getClientOriginalName());

       

       return true;
        
    }

 
}
