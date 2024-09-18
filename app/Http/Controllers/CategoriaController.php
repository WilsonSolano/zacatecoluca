<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorias = Categoria::select(
            "categorias.codigo",
            "categorias.nombre",
        )->get();
        
        return view("/categorias/show")->with(["categorias" => $categorias]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("/categorias/create");

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = request()->validate([
            'nombre'=> 'required',
        ]);

        Categoria::create($data);

        return redirect('/categorias/show');
    }

    /**
     * Display the specified resource.
     */
    public function show(Categoria $categoria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categoria $categoria)
    {
        return view('/categorias/update')->with(['categoria' => $categoria]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Categoria $categoria)
    {
        $data = request()->validate([
            'nombre'=> 'required',
        ]);

        $categoria->nombre = $data['nombre'];


        $categoria->updated_at = now();
        
        $categoria->save();

        return redirect('/categorias/show');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Categoria::destroy($id);

        return response()->json(array("res"=>true));
    }
}
