<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoutingController extends Controller
{
    public function preview()
    {
        return view('preview');
    }
    public function root()
    {
        return view('index2');
    }
    public function home()
    {
        return view('index2');
    }
    /**
     * first level route
     */
    public function firstLevel(Request $request, $first)
    {
        return view($first);
    }

    /**
     * second level route
     */
    public function secondLevel(Request $request, $first, $second)
    {
        return view($first . '.' . $second);
    }

    /**
     * third level route
     */
    public function thirdLevel(Request $request, $first, $second, $third)
    {
        return view($first . '.' . $second . '.' . $third);
    }
}
