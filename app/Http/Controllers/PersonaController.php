<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;

class PersonaController extends Controller
{
    public function index()
    {
        $personas = Persona::all();
        return view('personas.index', compact('personas'));

    }
    public function create()
    {
        return view('personas.create');
    }
    public function store(Request $request)
    {
       // Validar los datos del formulario
       $request->validate([
        'nombres' => 'required|string|min:5|max:255',
        'apellido_p' => 'required|string|min:5|max:255',
        'apellido_m' => 'required|string|min:5|max:255',
        'fecha_nac' => 'required|string|min:5|max:255',
        'cargos' => 'required|string|min:5|max:255',
    ]);

     // Crear un nuevo estudiante usando el método `create` del modelo
    Persona::create($request->all());

    // Redireccionar a la vista de listado de estudiantes
    return redirect()->route('personas.index');
    }
    public function show(string $id)
    {
        //
    }
    public function edit(string $id)
    {
        $persona = Persona::findOrFail($id);
        return view('personas.edit', compact('persona'));
    }
    public function update(Request $request, string $id)
    {
        // Validar los datos del formulario
        $request->validate([
            'nombres' => 'required|string|min:5|max:255',
            'apellido_p' => 'required|string|min:5|max:255',
            'apellido_m' => 'required|string|min:5|max:255',
            'fecha_nac' => 'required|string|min:5|max:255',
            'cargos' => 'required|string|min:5|max:255',
        ]);

        // Buscar el estudiante por su ID
        $persona = Persona::findOrFail($id);

        // Actualizar los datos del estudiante
        $persona->update($request->all());

        // Redireccionar a la vista de listado de estudiantes
        return redirect()->route('personas.index');
    }
    public function destroy(string $id)
    {
        $cargo = Cargo::findOrFail($id);

        $cargo->delete();

        return redirect()->route('cargos.index');

    }
}
