<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LinkController extends Controller
{
    public function prestasi()
    {
        return view('prestasi');
    }

    public function ekskul()
    {
        return view('ekskul');
    }

    public function jurusan()
    {
        return view('jurusan');
    }
}
