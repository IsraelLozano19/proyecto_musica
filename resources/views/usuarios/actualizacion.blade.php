@extends('dashboard')

@section('contenido')

<div class="text-center">
    <h2>Edición de Usuarios</h2>
    <p class="lead">Completa los datos solicitados</p>
</div>
<div class="row justify-content-center my-5">
    <div class="col-lg-6">
      <form action="/usuario/{{$usuario->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
    @include('usuarios.formulario')
@endsection



