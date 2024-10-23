@extends('layouts.app')

@section('title', 'Clientes')

@section('content')
    <h1>Clientes</h1>
    <h5>Listado de Clientes</h5>
    <hr>

    <div class="d-flex justify-content-end mb-3">
        <a href="/reporteClientes" class="btn btn-primary" target="_blank">Generar reporte</a>
        <a href="/reports/seleccionarCategoria" class="btn btn-primary">Generar reporte por categoria</a>
    </div>
    <div class="d-flex m-3">
        <form action="/reporteClienteEspesifico" method="POST">
            @csrf

            <label for="id">ID del Cliente</label>
            <input type="number" name="id" id="id" class="form-control" required>

            @error('id')
                <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <button type="submit" class="btn btn-primary mt-3">Generar Reporte</button>
        </form>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#Codigo</th>
                <th scope="col">Nombre</th>
                <th scope="col">Edad</th>
                <th scope="col">Categoria</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clientes as $item)
                <tr>
                    <td>{{ $item->codigo }}</td>
                    <td>{{ $item->nombre }}</td>
                    <td>{{ $item->edad }}</td>
                    <td>{{ $item->categoria }}</td>
                    <td>
                        <a class="btn btn-success btn-sm" href="/clientes/edit/{{ $item->codigo }}">Modificar</a>
                        <button class="btn btn-danger btn-sm" url="/clientes/destroy/{{ $item->codigo }}"
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
