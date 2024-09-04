@extends('layout.app')

@section('title', 'Inicio')

@section('content')
        <h2>Lista de Categorias</h2>

        <table class="table">
            <thead>
              <tr>
                <th scope="col">#Codigo</th>
                <th scope="col">Nombre</th>
                <th scope="col">Acciones</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td><a href=""><i class="bi-pen-fill" style="font-size: 1.5rem; color: cornflowerblue;"></a></i> <a href=""><i class="bi bi-trash-fill" style="font-size: 1.5rem; color: rgb(213, 11, 22);"></a></i></td>  
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td><a href=""><i class="bi-pen-fill" style="font-size: 1.5rem; color: cornflowerblue;"></a></i> <a href=""><i class="bi bi-trash-fill" style="font-size: 1.5rem; color: rgb(213, 11, 22);"></a></i></td>  
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Larry the Bird</td>
                <td><a href=""><i class="bi-pen-fill" style="font-size: 1.5rem; color: cornflowerblue;"></a></i> <a href=""><i class="bi bi-trash-fill" style="font-size: 1.5rem; color: rgb(213, 11, 22);"></a></i></td>  
              </tr>
            </tbody>
          </table>    
@endsection