@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
    <h1>Modificar</h1>
    <h5>Formulario para actualizar Categorias</h5>
    <hr>
    <form action="/categorias/update/{{ $categoria->codigo }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-6">
                Nombre
                <input type="text" class="form-control" name="nombre" value="{{ $categoria->nombre }}"> @error('nombre')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-12 mt-2">
                <button class="btn btn-primary">Guardar</button>
            </div>
    </form>
    </div>
@endsection
