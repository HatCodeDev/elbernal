<?php

namespace App\Http\Controllers;

use App\Models\Bebida;
use App\Models\Tostado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BebidaController extends Controller
{
    public function index()
    {
        $bebidas = Bebida::with('tostado')->get(); // Obtener todas las bebidas con su tipo de tostado asociado
        $tostados = Tostado::all(); // Obtener todos los tipos de tostado para el select
        return view('bebidas.index', compact('bebidas', 'tostados'));
    }


    public function create()
    {
        $tostados = Tostado::all(); // Obtener todos los tipos de tostado para el select
        return view('bebidas.create', compact('tostados'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'tipo' => 'required|max:80',
            'tostados_id' => 'required|exists:tostados,id',
            'precio' => 'required|numeric',
            'filtracion' => 'required|max:100',
            'altura' => 'required|max:50',
            'complementos' => 'required|max:100',
            'imagen' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validación para la imagen
        ]);

        try {
            $bebida = new Bebida();
            $bebida->tipo = $request->tipo;
            $bebida->tostados_id = $request->tostados_id;
            $bebida->precio = $request->precio;
            $bebida->filtracion = $request->filtracion;
            $bebida->altura = $request->altura;
            $bebida->complementos = $request->complementos;

            if ($request->hasFile('imagen')) {
                $imagen = $request->file('imagen');
                $nombreImagen = time() . '.' . $imagen->getClientOriginalExtension();
                $ruta = 'public/imgProducto/';
                $imagen->storeAs($ruta, $nombreImagen);
                $bebida->imagen = '/imgProducto/' . $nombreImagen;
            }

            $bebida->save();

            return redirect()->route('bebidas.index')->with('success', 'Bebida creada exitosamente');
        } catch (\Exception $e) {
            return redirect()->route('bebidas.index')->with('error', 'Error al crear la bebida: ' . $e->getMessage());
        }
    }



    public function show($id)
    {
        $bebida = Bebida::findOrFail($id);
        return view('bebidas.show', compact('bebida'));
    }


    public function edit($id)
    {
        $bebida = Bebida::findOrFail($id);
        $tostados = Tostado::all(); // Obtener todos los tipos de tostado para el select
        return view('bebidas.edit', compact('bebida', 'tostados'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'tipo' => 'required|max:80',
            'tostados_id' => 'required|exists:tostados,id',
            'precio' => 'required|numeric',
            'filtracion' => 'required|max:100',
            'altura' => 'required|max:50',
            'complementos' => 'required|max:100',
            'imagen' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validación para la imagen
        ]);

        try {
            $bebida = Bebida::findOrFail($id);

            // Actualizar los campos excepto la imagen
            $bebida->tipo = $request->tipo;
            $bebida->tostados_id = $request->tostados_id;
            $bebida->precio = $request->precio;
            $bebida->filtracion = $request->filtracion;
            $bebida->altura = $request->altura;
            $bebida->complementos = $request->complementos;

            // Verificar si se envió una nueva imagen
            if ($request->hasFile('imagen')) {
                // Eliminar la imagen anterior si existe
                if ($bebida->imagen) {
                    // Obtiene la ruta relativa correcta
                    $imagenPath = str_replace('/storage/', 'public/', $bebida->imagen);
                    Storage::delete($imagenPath);
                }

                // Procesar la nueva imagen y guardarla
                $imagen = $request->file('imagen');
                $nombreImagen = time() . '.' . $imagen->getClientOriginalExtension();
                $ruta = 'public/imgProducto/';
                $imagen->storeAs($ruta, $nombreImagen);

                // Actualizar la imagen en la base de datos
                $bebida->imagen = '/imgProducto/' . $nombreImagen;
            }

            // Guardar los cambios
            $bebida->save();

            return redirect()->route('bebidas.index')->with('success', 'Bebida modificada exitosamente');
        } catch (\Exception $e) {
            return redirect()->route('bebidas.index')->with('error', 'Error al modificar la bebida: ' . $e->getMessage());
        }
    }


    public function destroy($id)
    {
        $bebida = Bebida::findOrFail($id);
        $bebida->delete();

        return redirect()->route('bebidas.index')->with('success', 'Bebida eliminada exitosamente');
    }
}
