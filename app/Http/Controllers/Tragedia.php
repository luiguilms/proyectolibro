<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\agregarlibro;


class Tragedia extends Controller
{
    public function index()
    {
        $libro = agregarlibro::where('categoria','tragedia')->get();
        return view('tragedia')->with('libro',$libro);
    }
}
