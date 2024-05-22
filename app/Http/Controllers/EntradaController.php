<?php

namespace App\Http\Controllers;

use App\Models\entrada;
use Illuminate\Http\Request;

class EntradaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $texto = trim($request->input('texto')); // Corrección aquí
        $registros = entrada::where('placa', 'like', '%' . $texto . '%')->paginate(10);
        return view('mv.index', compact('registros', 'texto'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $entrada= new entrada();
        return view('mv.action',['entrada'=>new entrada()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $registro = new entrada;
        $registro->placa=$request->input('placa');
        $registro->fecha=$request->input('fecha');
        $registro->save();
        return response()->json([
            'status'=> 'success',
            'message'=>'Registro creado satisfactoriamente'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(entrada $entrada)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(entrada $entrada)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, entrada $entrada)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(entrada $entrada)
    {
        //
    }
}
