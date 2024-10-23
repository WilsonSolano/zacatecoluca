@extends('layouts.app')

@section('title', 'Crear')

@section('content')
    <br>
    <h2>Crear un Cliente</h2>
    <br>
    <form action="/reporteClientesPorCategoria" method="POST">
        @csrf
        <div class="col-12">
            Categorias
            <select name="id" class="form-control">
                @foreach ($categorias as $item)
                    <option value="{{ $item->codigo }}">{{ $item->nombre }}</option>
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
@endsection