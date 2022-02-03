<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    {{--  <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-welcome />
            </div>
        </div>
    </div>  --}}
    <br>
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
              <li class="breadcrumb-item active" aria-current="page">Mis preguntas</li>
            </ol>
        </nav>
    </div>
    <div class="container">
        <hr>
        <br>
        <br>
        <h1>MIS PREGUNTAS</h1>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Carousel</h5>
                      <p class="card-text">¿Como hacer un carousel totalemte responsivo con solo css3 y html5?</p>
                      <a href="#" class="card-link btn btn-success">Respuestas</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Carousel</h5>
                      <p class="card-text">¿Como hacer un carousel totalemte responsivo con solo css3 y html5?</p>
                      <a href="#" class="card-link btn btn-success">Respuestas</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
