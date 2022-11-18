<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\agregarlibro;


class Romance extends Controller
{
    public function index()
    {
        $libro = agregarlibro::where('categoria','romance')->get();
        return view('romance')->with('libro',$libro);
    }
}
