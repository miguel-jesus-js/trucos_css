<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ URL::asset("css/efectosScroll.css")}}">
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <div class="bg-gray-100 dark:bg-gray-900">
            <nav id="menu" style="z-index: 4;" class="navbar navbar-expand-lg navbar-light  shadow-sm position-fixed w-100 z-index-2">
                <div class="container-fluid">
                  <a class="navbar-brand  text-dark" href="/">TRUCOS CSS</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link active text-dark" aria-current="page" href="/acercade">Acerda de</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active text-dark" aria-current="page" href="/crearpost">Crear post</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active text-dark" aria-current="page" href="/crearpregunta">Realizar pregunta</a>
                      </li>
                    </ul>
                    <span class="navbar-text">
                        @if (Route::has('login'))
                            <div class="hidden fixed top-0 right-0 px-6 py-2 sm:block">
                                @auth
                                    <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                                @else
                                    <a href="{{ route('login') }}" class="btn btn-info text-white">Log in</a>
            
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                                    @endif
                                @endauth
                            </div>
                        @endif
                    </span>
                  </div>
                </div>
            </nav>
            <div class="">
                <img style="max-height: 100vh" src="img/fondo.png" class="card-img w-100" alt="...">
                <div class="card-img-overlay">
                    <br><br><br><br><br><br>
                  <h1 class="card-title">TRUCOS CSS</h1>
                  <h6 class="card-text">
                      Aprende nuevas cosas y enterate de los más nuevo de <small class="text-danger">CSS</small>
                  </h6>
                </div>
            </div>
            
            <div class="container">
                <hr>
                <br>
                <h1 class="maquinaEscribir anim-typewriter">POST RECIENTES</h1>
                <button type="button" onclick="postRecientes()" class="btn btn-info text-white">CARGAR POST RECIENTES</button>
                <br><br>
                <div class="row" id="row">

                </div>
            </div>
        </div>
    </body>
    <script src={{ URL::asset("js/jquery.min.js")}}></script>
    <script>
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });
      function postRecientes(){
        $.ajax({
          url:'api/postRecientes',
          type:'post',
          success: function (response) {
            var col = '';
            var datos = JSON.parse(response);
            $.each(datos.data, function(index, post){
              col += '<div id="scroll-content" class="col-md-3 mb-4 animado zoom"><div class="card" style="width: 18rem;"><img src="img/progress.png" class="card-img-top" alt="..."><div class="card-body"><h5 class="card-title">'+ post.titulo +'</h5><p class="card-text">'+ post.descripcion +'</p></div><ul class="list-group list-group-flush"><li class="list-group-item">Vistas: '+ post.vistas +'</li><li class="list-group-item">Comentarios: '+ post.comentarios +'</li></ul><div class="card-body"><a href="#" class="card-link btn btn-dark">Ver post</a></div></div></div>';
            })
            $('#row').html(col);
          },
          statusCode: {
             404: function() {
                alert('web not found');
             }
          },
          error:function(x,xs,xt){
              //nos dara el error si es que hay alguno
              window.open(JSON.stringify(x));
              //alert('error: ' + JSON.stringify(x) +"\n error string: "+ xs + "\n error throwed: " + xt);
          }
        });
        //efecto scroll
        let animado = document.getElementsByClassName('animado');
        function mostrarScroll(){
          let scrollTop = document.documentElement.scrollTop;
          for(var i = 0; i < animado.length; i++){
            let alturaAnimado = animado[i].offsetTop;
            if(alturaAnimado -650 < scrollTop){
              animado[i].style.opacity = 1;
              animado[i].classList.add("mostrarArriba");
            }
          }
        }
        window.addEventListener('scroll', mostrarScroll);
      }
      //Evento scroll
      $(document).on("scroll", function(){
          //sacamos el desplazamiento actual de la página
          var desplazamientoActual = $(document).scrollTop();
          if (desplazamientoActual > 90){
            $('#menu').addClass('bg-info');
          }else{
            $('#menu').removeClass('bg-info');

          }
      });
    </script>
</html>
