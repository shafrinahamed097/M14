<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    function DemoAction(Request $request):string{
        $name=$request->name;
        $age=$request->age;
        return "My Name is {$name}, I'm {$age} years old.";
    }
}
