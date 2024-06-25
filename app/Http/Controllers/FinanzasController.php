<?php

namespace App\Http\Controllers;

use App\Models\Finanzas;
use Illuminate\Http\Request;

class FinanzasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $finanzas = Finanzas::all();
        return view ('finanzas.index',compact('finanzas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Finanzas $finanzas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Finanzas $finanzas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Finanzas $finanzas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Finanzas $finanzas)
    {
        //
    }
}
