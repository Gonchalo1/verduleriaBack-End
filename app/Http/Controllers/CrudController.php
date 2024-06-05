<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return response()->json($users);
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
    public function show(string $id)
    {
        $user = User::findOrFail($id);
        return response()->json($user);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    try {
        // Verifica si el ID recibido es válido
        if (!is_numeric($id)) {
            return response()->json(['error' => 'ID de usuario inválido'], 400);
        }

        // Busca el usuario por su ID
        $user = User::find($id);

        // Verifica si el usuario existe
        if (!$user) {
            return response()->json(['error' => 'Usuario no encontrado'], 404);
        }

        // Actualiza los campos del usuario con los datos recibidos en la solicitud
        $user->update($request->all());

        return response()->json(['message' => 'Usuario actualizado correctamente'], 200);
    } catch (\Exception $e) {
        // Maneja cualquier error que pueda ocurrir durante la actualización del usuario
        return response()->json(['error' => 'Error al actualizar el usuario: ' . $e->getMessage()], 500);
    }
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);
        $user->delete();
    
        return response()->json(['message' => 
        'Usuario eliminado correctamente'], 200);
    }
}
