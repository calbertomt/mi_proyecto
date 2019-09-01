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
    		]);
    	}
    	return view('teams.index');
    }
}
