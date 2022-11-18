<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\agregarlibro;

class Novela extends Controller
{
    public function index()
    {
        $libro = agregarlibro::where('categoria','novela')->get();
        return view('novela')->with('libro',$libro);
    }
}
