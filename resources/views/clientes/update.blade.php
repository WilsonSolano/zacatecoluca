@extends('layout.app')

@section('title', 'Actualizar')

@section('content')
        <br>
        <h2>Editar un Clientes</h2>
        <br>
        <form>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Nombre</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Edad</label>
              <input type="text" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Categoria</label>
                <input type="text" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
          </form>    
@endsection