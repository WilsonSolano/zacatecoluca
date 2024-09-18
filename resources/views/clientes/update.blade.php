@extends('layout.app')

@section('title', 'Actualizar')

@section('content')
    <h1>Modificar</h1>
    <h5>Formulario para actualizar Clientes</h5>
    <hr>
    <form action="/clientes/update/{{ $cliente->codigo }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-6">
                Nombre
                <input type="text" class="form-control" name="nombre" value="{{ $cliente->nombre }}"> @error('nombre')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-6">
                Edad
                <input type="text" class="form-control" name="edad" value="{{ $cliente->edad }}"> @error('edad')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="col-12">
            Categoria
            <select name="categoria" id="" class="form-control">
                @foreach ($categorias as $item)
                    <option value="{{ $item->codigo }}" {{ $item->codigo == $cliente->categoria ? 'selected' : '' }}>
                        {{ $item->nombre }}
                    </option>
                @endforeach
            </select>
            @error('categoria')
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