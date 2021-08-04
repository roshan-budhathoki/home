<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class login extends Controller
{
    //
    function showValue($id = "no value"){
        return "I am login through controller.".$id;
    }

    function opposite(){
        return redirect(route('namedRoute'));
    }
}
