<?php

namespace App\Http\Controllers;

use App\Models\President;
use Illuminate\Http\Request;

class PresidentController extends Controller
{
    // Mostrar todos los presidentes
    public function index()
    {
        $presidents = President::all();
        return view('presidents.index', compact('presidents'));
    }

    // Mostrar formulario de creación
    public function create()
    {
        return view('presidents.create');
    }

    // Guardar un nuevo presidente
    public function store(Request $request)
    {
        $request->validate([
            'dni' => 'required|unique:presidents,dni',
            'nombre' => 'required',
            'apellidos' => 'required',
            'fecha_nac' => 'required|date',
            'año' => 'required|integer',
        ]);

        President::create($request->all());
        return redirect()->route('presidents.index')->with('success', 'Presidente creado correctamente.');
    }

    // Mostrar un presidente específico
    public function show(President $president)
    {
        return view('presidents.show', compact('president'));
    }

    // Mostrar formulario de edición
    public function edit(President $president)
    {
        return view('presidents.edit', compact('president'));
    }

    // Actualizar un presidente
    public function update(Request $request, President $president)
    {
        $request->validate([
            'nombre' => 'required',
            'apellidos' => 'required',
            'fecha_nac' => 'required|date',
            'año' => 'required|integer',
        ]);

        $president->update($request->all());
        return redirect()->route('presidents.index')->with('success', 'Presidente actualizado correctamente.');
    }

    // Eliminar un presidente
    public function destroy(President $president)
    {
        $president->delete();
        return redirect()->route('presidents.index')->with('success', 'Presidente eliminado correctamente.');
    }
}
