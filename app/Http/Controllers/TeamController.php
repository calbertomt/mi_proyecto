<?php

namespace proyPrueba\Http\Controllers;

use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index(Request $request){
    	if ($request->ajax()) {
    		return response()->json([
    			['id' => 1, 'name' => 'Player 1'],
    			['id' => 2, 'name' => 'Player 2'],
    			['id' => 3, 'name' => 'Player 3']
    		], 200);
    	}
    	return view('teams.index');
    }

    public function store(Request $request){
        if($request->ajax()){
            $teams = new Team();
            $teams->name     = $request->input('name');
            $teams->position = $request->input('position');
            $teams->picture  = $request->input('picture');
            $teams->save();

            return response()->json([
                "message" => "Player creado con exito"
            ], 200);
        }
    }
}
