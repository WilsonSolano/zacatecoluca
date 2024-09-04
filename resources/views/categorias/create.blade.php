@extends('layout.app')

@section('title', 'Inicio')

@section('content')
        <br>
        <h2>Crear una Categoria</h2>
        <br>
        <form>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Nombre</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <button type="submit" class="btn btn-primary">Agregar</button>
          </form>    
@endsection