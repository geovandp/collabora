<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    function dashboard() {
        return view("page/dashboard");
    }

    function event() {
        return view("page/event");
    }

    
}
