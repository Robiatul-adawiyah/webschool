<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActionController extends Controller
{
    public function action1()
    {
        return view('action1');
    }

    public function action2()
    {
        return view('action2');
    }

    public function action3()
    {
        return view('action3');
    }
}
