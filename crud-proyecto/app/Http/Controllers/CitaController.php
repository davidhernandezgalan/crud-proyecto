<?php

namespace App\Http\Controllers;

use App\Models\Cita;
use Illuminate\Http\Request;

class CitaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $citas = Cita::all();
        return view('citas.index-cita', compact('citas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('citas.create-cita');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => ['required', 'max:255'],
            'fecha' => ['required', 'date'],
            'hora' => ['required'],
            'servicio' => ['required'],
            'comentario' => ['nullable', 'max:500'],
        ]);

        $cita = Cita::create($request->all());

        return redirect()->route('cita.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cita $cita)
    {
        return view('citas.show-cita', compact('cita'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cita $cita)
    {
        return view('citas.edit-cita', compact('cita'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cita $cita)
    {
        $request->validate([
            'nombre' => ['required', 'max:255'],
            'fecha' => ['required', 'date'],
            'hora' => ['required'],
            'servicio' => ['required'],
            'comentario' => ['nullable', 'max:500'],
        ]);

        $cita->update($request->all());

        return redirect()->route('cita.show', $cita);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cita $cita)
    {
        $cita->delete();

        return redirect()->route('cita.index');
    }
}
