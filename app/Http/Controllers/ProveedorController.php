<?php

namespace App\Http\Controllers;

use App\Models\Proveedor;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $proveedores = Proveedor::all();
        return view ('proveedor.index',compact('proveedores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $proveedores = new Proveedor();

        return view('proveedor.create', compact('proveedores'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'dirección' => 'required|string|max:255',
            'telefono' => 'required|string|max:20',
        ]);
        Proveedor::create($validated);
        return redirect()->route('proveedor.create')->with('success', 'Agregado con Éxito.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Proveedor $proveedores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Proveedor $proveedor)
    {
        return view('proveedor.edit', compact('proveedor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Proveedor $proveedor)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'dirección' => 'required|string|max:255',
            'telefono' => 'required|string|max:20',
        ]);
        $proveedor->update($validated);

        return redirect()->route('proveedor.index')->with('success', 'Proveedor actualizado exitosamente.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Proveedor $proveedor)
    {
        $proveedor->delete();
    return redirect()->route('proveedor.index')->with('success', 'Proveedor eliminado exitosamente.');
        }
}
