<?php

namespace proyPrueba\Http\Controllers;

use proyPrueba\Trainer;
use Illuminate\Http\Request;

class TrainerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trainers = Trainer::all();

        return view('trainers.index', compact('trainers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('trainers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        /*
         *Revisamos primeros si en la variable $request viene un archivo
         *Le indicamos al sistema que trataremos a lo que viene en $request como un archivo
         *Le damos un nombre a esa variable y luego le asignamos ese nombre a una nueva variable
         *Movemos la imagen a una nueva carpeta
         */
        if($request->hasFile('avatar')){
            $file = $request->file('avatar');
            $nameFile = time().$file->getClientOriginalName();
            $file->move(public_path().'/images/', $nameFile);
        }
        //Enviar todos los campos desde el Formulario
        //return $request->all();

        $trainer = new Trainer();
        //Enivar un Dato o atributo en especifico del Formulario
        $trainer->name = $request->input('name');
        $trainer->avatar = $nameFile;
        $trainer->save();

        return 'Guadado con Exito';

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {

        $trainer = Trainer::where('slug','=',$slug)->firstOrFail();

        //$trainer = Trainer::find($id);

        return view('trainers.show', compact('trainer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
