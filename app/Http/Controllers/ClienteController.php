<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = Cliente::select(
            "clientes.codigo",
            "clientes.nombre",
            "clientes.edad",
            "categorias.nombre as categoria",
        )->join("categorias", "categorias.codigo", "=", "clientes.categoria")->get();

        return view("/clientes/show")->with(["clientes" => $clientes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorias = Categoria::all();

        return view("/clientes/create")->with(['categorias' => $categorias]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $data = request()->validate([
            'nombre' => 'required',
            'edad' => 'required',
            'categoria' => 'required'
        ]);

        Cliente::create($data);

        return redirect('/clientes/show');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cliente $cliente)
    {
        $categorias = Categoria::all();

        return view('/clientes/update')->with(['cliente' => $cliente,'categorias'=> $categorias]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cliente $cliente)
    {
        $data = request()->validate([
            'nombre'=> 'required',
            'edad'=> 'required',
            'categoria'=> 'required'
        ]);

        $cliente->nombre = $data['nombre'];
        $cliente->edad = $data['edad'];
        $cliente->categoria = $data['categoria'];

        $cliente->updated_at = now();
        
        $cliente->save();

        return redirect('/clientes/show');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Cliente::destroy($id);

        return response()->json(array("res"=>true));
    }
}
