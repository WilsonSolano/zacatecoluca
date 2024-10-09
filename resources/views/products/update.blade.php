@extends('layouts.app')

@section('title', 'Productos')

@section('content')
    <h1>Modificar</h1>
    <h5>Formulario para actualizar productos</h5>
    <hr>
    <form action="/products/update/{{ $producto->codigo }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-6">
                Nombre
                <input type="text" class="form-control" name="nombre" value="{{ $producto->nombre }}"> @error('nombre')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-6">
                Precio
                <input type="text" class="form-control" name="precio" value="{{ $producto->precio }}"> @error('precio')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="col-12">
            Marca
            <select name="marca" id="" class="form-control">
                @foreach ($marcas as $item)
                    <option value="{{ $item->codigo }}" {{ $item->codigo == $producto->marca ? 'selected' : '' }}>
                        {{ $item->nombre }}
                    </option>
                @endforeach
            </select>
            @error('marca')
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
