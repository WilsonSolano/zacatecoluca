@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
    <br>
    <h2>Crear una Categoria</h2>
    <br>
    <form action="/categorias/store" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombre" aria-describedby="emailHelp">
            @error('nombre')
                <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="col-12 mt-2">
          <button class="btn btn-primary">Guardar</button>
      </div>
    </form>
@endsection