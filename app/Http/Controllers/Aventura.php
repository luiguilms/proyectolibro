<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\agregarlibro;

class Aventura extends Controller
{
    public function index()
    {
        $libro = agregarlibro::where('categoria','aventura')->get();
        return view('aventura')->with('libro',$libro);
    }
}
