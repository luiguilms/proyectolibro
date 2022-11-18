<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Inicio</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/product/">

    

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .container {
  max-width: 960px;
}

/*
 * Custom translucent site header
 */

.site-header {
  background-color: rgba(0, 0, 0, .85);
  -webkit-backdrop-filter: saturate(180%) blur(20px);
  backdrop-filter: saturate(180%) blur(20px);
}
.site-header a {
  color: #8e8e8e;
  transition: color .15s ease-in-out;
}
.site-header a:hover {
  color: #fff;
  text-decoration: none;
}

/*
 * Dummy devices (replace them with your own or something else entirely!)
 */

.product-device {
  position: absolute;
  right: 10%;
  bottom: -30%;
  width: 300px;
  height: 540px;
  background-color: #333;
  border-radius: 21px;
  transform: rotate(30deg);
}

.product-device::before {
  position: absolute;
  top: 10%;
  right: 10px;
  bottom: 10%;
  left: 10px;
  content: "";
  background-color: rgba(255, 255, 255, .1);
  border-radius: 5px;
}

.product-device-2 {
  top: -25%;
  right: auto;
  bottom: 0;
  left: 5%;
  background-color: #e5e5e5;
}


/*
 * Extra utilities
 */

.flex-equal > * {
  flex: 1;
}
.fondo{
  background-image: url(https://fondosmil.com/fondo/1674.jpg);
  background-position: center center;
  background-repeat: no-repeat;
  /* background-attachment: fixed; */
  background-size: cover ;
}
.cuadro{
  background-color: #FFFFFF80; 
  padding-top: 20px;
  padding-left: 30px;
  padding-right: 40px;
  padding-bottom: 20px;
  border-radius: 5%;
  box-shadow: 12px 11px 14px 3px rgba(0,0,0,0.73);
-webkit-box-shadow: 12px 11px 14px 3px rgba(0,0,0,0.73);
-moz-box-shadow: 12px 11px 14px 3px rgba(0,0,0,0.73);
  
}
@media (min-width: 768px) {
  .flex-md-equal > * {
    flex: 1;
  }
}

      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="product.css" rel="stylesheet">
  </head>
  <body>
    
<header class="site-header sticky-top py-1">
  <nav class="container d-flex flex-column flex-md-row justify-content-between">
    <h1 class="float -md -start mb-0" style="color: white">Blog</h1>
    
    @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        
                        <a class="py-2 d-none d-md-inline-block" href="{{ url('/home') }}">Home</a>
                    @else
                        
                        <a class="py-2 d-none d-md-inline-block" href="{{ route('login') }}">Login</a>
                        @if (Route::has('register'))
                        
                            <a class="py-2 d-none d-md-inline-block" href="{{ route('register') }}">Registrar</a>
                        @endif
                    @endauth
                </div>
            @endif
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mx-auto" role="img" viewBox="0 0 24 24"><title>Product</title><circle cx="12" cy="12" r="10"/><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"/></svg>
    
  </nav>
</header>

<main>

  <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
  <div class= "fondo">
  <div class="col-md-5 p-lg-5 mx-auto my-5">
  <div class="cuadro"  >
      <h1 class="display-4 fw-normal">BIENVENIDOS A NUESTRA PAGINA</h1>
      <p class="lead fw-normal">Aqui podran encontrar una cantidad muy grande de libros e incluso podran colocar sus propios libros como recomendaciones.</p>
      <a class="btn btn-outline-secondary" href="{{ route('login') }}">Empezemos</a>
    </div>
    </div>
    <!-- <div class="product-device shadow-sm d-none d-md-block"></div>
       <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div> -->
  </div>


</main>



    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
  <footer class = "as">
  <div class="container">
    <div class="row">
        <div class="col-xs-12 col-md-6">
            <h6 class="text-muted lead">Integrantes:</h6>
            <h6 class="text-muted">
            Venero  Medina Patricio<br>
            Lupacca Apaza  Luigui   Marco.<br>
            Quecara Cruz   Elvis.<br>
            Apaza   Barra  Aaron    Daniel.<br>
            Teléfonos: Al privado.<br>
            </h6>
        </div>
        <div class="col-xs-12 col-md-6">
        <div class="pull-right">
        <h6 class="text-muted lead">ENCUENTRANOS EN LAS REDES</h6>
              <div class="redes-footer">
                  <a href="https://www.facebook.com/"><img src="https://cdn-icons-png.flaticon.com/512/2504/2504903.png" style="width: 20px"></i></a>
                  <a href="https://twitter.com/"><img src="https://cdn-icons-png.flaticon.com/128/733/733579.png" style="width: 20px"></i></a>
                  <a href="https://www.youtube.com/"><img src="https://cdn-icons-png.flaticon.com/128/3670/3670147.png" style="width: 20px"></i></a>
              </div>
        </div>
        <div class="row"> <p class="text-muted small text-right">TECSUP @2022.<br> Sin derechos.</p></div>
    </div>
  </div>  
</div>
</footer>
<style>
  .as {
	background-color:#1A1A1A;
	height: 50%;
  color: white;
  padding: 15px;
}

.main1 { 
  display:flex;
  margin:0 auto;
}

a img:hover {
    color: #fff;
}
</style>
</html>
