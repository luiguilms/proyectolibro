<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\agregarlibro;


class Cuento extends Controller
{
    public function index()
    {
        $libro = agregarlibro::where('categoria','cuento')->get();
        return view('cuento')->with('libro',$libro);
    }
}
