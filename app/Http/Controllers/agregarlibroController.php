<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\agregarlibro;

class agregarlibroController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      
        return view('agregarlibro');
    }
    public function agregarlibroProceso(Request $request){
        $id = auth()->user()->id;
        $libro = New agregarlibro();
        $libro->nombre = $request->Nombre;
        $libro->Autor = $request->Autor;
        $libro->Cover = $request->Cover;
        $libro->fecha_publi = $request->fecha_publi;
        $libro->imagen= $request->Imagen;
        $libro->categoria= $request->categoria;
        $libro->user_id= $id;
        $libro->save();
        return redirect('home');
    }
}
