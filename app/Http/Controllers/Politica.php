<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\agregarlibro;


class Politica extends Controller
{
    public function index()
    {
        $libro = agregarlibro::where('categoria','politica')->get();
        return view('politica')->with('libro',$libro);
    }
}
