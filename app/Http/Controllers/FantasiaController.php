<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\agregarlibro;

class FantasiaController extends Controller
{
    public function index()
    {
        $libro = agregarlibro::where('categoria','fantasia')->get();
        return view('Fantasia')->with('libro',$libro);
    }
}
