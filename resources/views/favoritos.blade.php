@extends('html')
@section('body')
<div class="Eventos">
    <div class="card" style="width: 15rem;">
        <a href="index.html"><img src="{{ asset('css/imagenes/equipo/Uruguay.jpg') }}" class="card-img-top" alt="..."></a>
        <div class="card-body">
        <p class="card-text"><hr>Futbol <br> Seleccion Uruguaya de Futbol</p>
        </div>
    </div>
    <div class="card" style="width: 15rem;">
        <a href="index.html"><img src="{{ asset('css/imagenes/equipo/Argentina.jpg') }}" class="card-img-top" alt="..."></a>
        <div class="card-body">
        <p class="card-text"><hr>Futbol <br> Seleccion Argentina de Futbol</p>
        </div>
    </div>
</div> 
@endsection