<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TuModelo; // Asegúrate de importar tu modelo

class TuControlador extends Controller
{
    public function store(Request $request)
    {
        // Validar los datos recibidos
        $validatedData = $request->validate([
            'campo1' => 'required|string', // Cambia según tus necesidades
            'campo2' => 'required|integer',
        ]);

        // Crear un nuevo registro en la base de datos
        $data = TuModelo::create($validatedData);

        // Retornar una respuesta
        return response()->json([
            'message' => 'Datos guardados con éxito',
            'data' => $data,
        ], 201);
    }
}
