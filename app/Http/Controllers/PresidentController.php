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
      $validated = $request->validate([
            'dni' => 'required|unique:presidents,dni',
            'name' => 'required|string',
            'last_name' => 'required|string',
            'birth_date' => 'required|date',
            'year' => 'required|integer',
        ]);
  President::create($validated);

        return redirect()->route('presidents.index')->with('success', 'President created successfully!');
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
            'name' => 'required',
            'last_name' => 'required',
            'birth_date' => 'required|date',
            'year' => 'required|integer',
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
