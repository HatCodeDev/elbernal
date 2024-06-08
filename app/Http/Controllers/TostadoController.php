<?php

namespace App\Http\Controllers;

use App\Models\Tostado;
use Illuminate\Http\Request;

class TostadoController extends Controller
{

    public function index()
    {
        $data = Tostado::get(); // Obtener todos los usuarios sin ordenar
        return view('tostados.index', compact('data'));
    }


    public function create()
    {
        return view('tostados.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'tostado' => 'required|unique:tostados,tostado|max:150',
        ]);

        Tostado::create([
            'tostado' => $request->tostado,
        ]);

        return redirect()->route('tostados.index')->with('success', 'Tipo de tostado creado exitosamente');
    }


    public function show($id)
    {
        $tostado = Tostado::find($id);
        return view('tostados.show', compact('tostado'));
    }

    public function edit($id)
    {
        $tostado = Tostado::find($id);
        return view('tostados.edit', compact('tostado'));
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'tostado' => 'required|unique:tostados,tostado,' . $id . '|max:150',
        ]);

        $tostado = Tostado::find($id);
        $tostado->update([
            'tostado' => $request->tostado,
        ]);

        return redirect()->route('tostados.index')->with('success', 'Tipo de tostado modificado exitosamente');
    }

    public function destroy($id)
    {
        $tostado = Tostado::find($id);
        $tostado->delete();

        return redirect()->route('tostados.index')->with('success', 'Tipo de tostado eliminado exitosamente');
    }
}
