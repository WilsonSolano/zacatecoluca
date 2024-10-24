@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
    <h1>Categorias</h1>
    <h5>Listado de Categorias</h5>
    <hr>
    <div class="d-flex justify-content-center mb-3">
        <a href="/reporteCategorias" class="btn btn-primary" target="_blank">Generar reporte</a>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#Codigo</th>
                <th scope="col">Nombre</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categorias as $item)
                <tr>
                    <td>{{ $item->codigo }}</td>
                    <td>{{ $item->nombre }}</td>
                    <td>
                        <a class="btn btn-success btn-sm" href="/categorias/edit/{{ $item->codigo }}">Modificar</a>
                        <button class="btn btn-danger btn-sm" url="/categorias/destroy/{{ $item->codigo }}"
                            onclick="destroy(this)" token="{{ csrf_token() }}">Eliminar</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
@section('scripts')
    {{-- SweetAlert --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- JS --}}
    <script src="{{ asset('js/product.js') }}"></script>
@endsection