<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\Cliente;
use App\Models\Product;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function reporteUno()
    {
        $data = Product::select(
            "productos.codigo",
            "productos.nombre",
            "productos.precio",
            "marcas.nombre as marca",
        )->join("marcas", "marcas.codigo", "=", "productos.marca")->get();

        // Cargar vista del reporte con la data
        $pdf = Pdf::loadView('/reports/report1', compact('data'));
        return $pdf->stream('productos.pdf');
    }

    public function reporteClientes()
    {
        $data = Cliente::select(
            "clientes.codigo",
            "clientes.nombre",
            "clientes.edad",
            "categorias.nombre as categoria",
        )->join("categorias", "categorias.codigo", "=", "clientes.categoria")->get();

        // Cargar vista del reporte con la data
        $pdf = Pdf::loadView('/reports/reportClientes', compact('data'));
        return $pdf->stream('clientes.pdf');
    }

    public function reporteCategorias()
    {
        $data = Branch::all();

        // Cargar vista del reporte con la data
        $pdf = Pdf::loadView('/reports/reportCategorias', compact('data'));
        return $pdf->stream('clientes.pdf');
    }

    public function reportePorCategoria()
    {
        $data2 = request()->validate([
            'id' => 'required'
        ]);

        $categoriaId = $data2['id'];

        $data = Cliente::select(
            "clientes.codigo",
            "clientes.nombre",
            "clientes.edad",
            "categorias.nombre as categoria"
        )->join("categorias", "categorias.codigo", "=", "clientes.categoria")
            ->where('clientes.categoria', $categoriaId)
            ->get();

        // Cargar la vista del reporte con la data
        $pdf = Pdf::loadView('/reports/reportClientes', compact('data'));
        return $pdf->stream('clientes.pdf');
    }

    public function reporteParaClienteEspesifico()
    {
        $data2 = request()->validate([
            'id' => 'required'
        ]);

        $categoriaId = $data2['id'];

        $data = Cliente::select(
            "clientes.codigo",
            "clientes.nombre",
            "clientes.edad",
            "categorias.nombre as categoria"
        )->join("categorias", "categorias.codigo", "=", "clientes.categoria")
            ->where('clientes.codigo', $categoriaId)
            ->get();

        // Cargar la vista del reporte con la data
        $pdf = Pdf::loadView('/reports/reportClientes', compact('data'));
        return $pdf->stream('clientes.pdf');
    }
}
