<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    function DemoAction(Request $request):string{
     $firstName = $request->header("firstName");
     $lastName = $request->header("lastName");
     $age = $request->header("age");

     return "My Name is $firstName $lastName and I am $age years old";
    }
}
