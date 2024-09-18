@extends('layout.app')

@section('title', 'Productos')

@section('content')
    <h1>Productos</h1>
    <h5>Listado de productos</h5>
    <hr>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#Codigo</th>
                <th scope="col">Nombre</th>
                <th scope="col">Precio</th>
                <th scope="col">Marca</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($productos as $item)
                <tr>
                    <td>{{ $item->codigo }}</td>
                    <td>{{ $item->nombre }}</td>
                    <td>{{ $item->precio }}</td>
                    <td>{{ $item->marca }}</td>
                    <td>
                        <a class="btn btn-success btn-sm" href="/products/edit/{{ $item->codigo }}">Modificar</a>
                        <button class="btn btn-danger btn-sm" url="/products/destroy/{{ $item->codigo }}"
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
