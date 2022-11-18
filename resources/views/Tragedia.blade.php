@extends('layouts.app')

@section('content')

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Tragedia</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/blog/">

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link href="blog.css" rel="stylesheet">
  </head>

  <body class = "fondo">

    <div class="container">
      <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
          <div class="col-4 d-flex justify-content-end align-items-center">

            <a class="btn btn-sm btn-outline-secondary" href="/agregarlibro">Agregar Libro</a>
          </div>
        </div>
      </header>

      <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
          <a class="p-2 text-muted" href="/Cuento">Cuento</a>
          <a class="p-2 text-muted" href="/Novela">Novela</a>
          <a class="p-2 text-muted" href="/Poesia">Poesia</a>
          <a class="p-2 text-muted" href="/Aventura">Aventura</a>
          <a class="p-2 text-muted" href="/Fantasia">Fantasia</a>
          <a class="p-2 text-muted" href="/Romance">Romance</a>
          <a class="p-2 text-muted" href="/Tragedia">Tragedia</a>
          <a class="p-2 text-muted" href="/Politica">Politica</a>
          <a class="p-2 text-muted" href="/Ciencias">Ciencias</a>
        </nav>
      </div>

      @foreach($libro as $libros)
    <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
        <div class="row">
          <div class="col-7">
            <h1 class="display-4 font-italic">{{$libros->Nombre}}</h1>
            <p class="lead my-3"> {{$libros->Cover}}</p>
            <p class="lead mb-0"><a href="https://www.planetadelibros.com.pe/libros/drama/00038/00381" class="text-white font-weight-bold">Comprar libros similares.</a></p>
          </div>
          <div class="col-5">
          <img src='{{$libros->Imagen}}' alt="">
          </div>
      </div><br>

    </div><br>
    @endforeach



@endsection
<style>
  .fondo{
    background-image:url(https://img.freepik.com/vector-gratis/fondo-vector-degradado-azul-claro-invierno_53876-126054.jpg?w=2000);
    background-position: center center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover ;
  }
</style>