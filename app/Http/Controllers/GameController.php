<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GameController extends Controller
{
    public function index()
    {
        $games = Game::all();
        return view('Games.index',compact('games'));
        
    }

    public function create()
    {
        return view('Games.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'levels'=>'required|numeric',
            'release'=>'required|date',
            'image'=>'required|image'
        ]);

        $game = Game::create($request->all());

        if($request->hasFile('image')){
            $nombre = $game->id.'.'.$request->file('image')->getClientOriginalExtension();
            $img = $request->file('image')->storeAs('public/img',$nombre);
            $game->image = '/img/'.$nombre;
            $game->save();
        }

        return redirect()->route('games.index')->with('success','Juego creado');
    }

    public function show(Game $game)
    {
        //
    }

    public function edit(Game $game)
    {
        return view('Games.edit',compact('game'));
    }

    public function update(Request $request, Game $game)
    {
        $request->validate([
            'name'=>'required',
            'levels'=>'required|numeric',
            'release'=>'required|date'
        ]);

        if($request->hasFile('image')){
            Storage::disk('public')->delete($game->image);
            $nombre = $game->id.'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('public/img',$nombre);
            $game->image = '/img/'.$nombre;
            $game->save();
        }

        $game->update($request->input());
        return redirect()->route('games.index')->with('success','Juego actualizado');
    }

    public function destroy(Game $game)
    {
        Storage::disk('public')->delete($game->image);
        $game->delete();
        return redirect()->route('games.index')->with('success','Juego eliminado');
    }
}
