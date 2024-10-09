@extends('layouts.app')

@section('title', 'Clientes')

@section('content')
    <h1>Clientes</h1>
    <h5>Listado de Clientes</h5>
    <hr>

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