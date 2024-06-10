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

        $bebida = Bebida::create($request->all());

        if ($request->hasFile('imagen')) {
            try {
                // Generar el nombre de la imagen
                $nombre = $bebida->id . '.' . $request->file('imagen')->getClientOriginalExtension();
                // dd('Nombre del archivo: ' . $nombre);
                // Intentar almacenar la imagen
                $request->file('image')->storeAs('public/img',$nombre);
    
                // Guardar la ruta de la imagen en la base de datos
                $bebida->imagen = 'storage/img/' . $nombre; // Ruta accesible públicamente
                $bebida->save();
    
                // Verificar la ruta en la base de datos
                // dd('Ruta en la base de datos: ' . $bebida->imagen);
            } catch (\Exception $e) {
                // Capturar cualquier error durante el almacenamiento
                return redirect()->route('bebidas.index')->with('error', 'Error al cargar la imagen: ' . $e->getMessage());
            }
        }

        return redirect()->route('bebidas.index')->with('success', 'Bebida creada exitosamente');
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
        $this->validate($request, [
            'tipo' => 'required|max:80',
            'tostados_id' => 'required|exists:tostados,id',
            'precio' => 'required|numeric',
            'filtracion' => 'required|max:100',
            'altura' => 'required|max:50',
            'complementos' => 'required|max:100',
            'imagen' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validación para la imagen
            // Agrega más validaciones según sea necesario
        ]);

        $bebida = Bebida::findOrFail($id);

        // Verificar si se envió una nueva imagen
        if ($request->hasFile('imagen')) {
            // Eliminar la imagen anterior si existe
            if ($bebida->imagen) {
                Storage::disk('public')->delete($bebida->imagen);
            }

            // Procesar la nueva imagen y guardarla
            $imagenPath = $request->file('imagen')->store('imgProducto', 'public');

            // Actualizar la imagen en la base de datos
            $bebida->imagen = $imagenPath;
        }

        // Actualizar los demás campos
        $bebida->tipo = $request->tipo;
        $bebida->tostados_id = $request->tostados_id;
        $bebida->precio = $request->precio;
        $bebida->filtracion = $request->filtracion;
        $bebida->altura = $request->altura;
        $bebida->complementos = $request->complementos;

        // Guardar los cambios
        $bebida->save();

        return redirect()->route('bebidas.index')->with('success', 'Bebida modificada exitosamente');
    }


    public function destroy($id)
    {
        $bebida = Bebida::findOrFail($id);
        $bebida->delete();

        return redirect()->route('bebidas.index')->with('success', 'Bebida eliminada exitosamente');
    }
}
