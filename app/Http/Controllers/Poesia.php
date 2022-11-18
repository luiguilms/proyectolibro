<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\agregarlibro;


class Poesia extends Controller
{
    public function index()
    {
        $libro = agregarlibro::where('categoria','poesia')->get();
        return view('poesia')->with('libro',$libro);
    }
}

