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
         *Le asignamos un nombre a esa variable y luego le asignamos ese nombre a una nueva variable
         *Movemos nuestro archivo a la carpeta public/images
         */
        if($request->hasFile('avatar')){
            $file = $request->file('avatar');
            $nameFile = time().$file->getClientOriginalName();
            $file->move(public_path().'/images/', $nameFile);
        }
        /*******************************************************************************************/
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
    public function show(Trainer $trainer)
    {

        //$trainer = Trainer::where('slug','=',$slug)->firstOrFail();

        //$trainer = Trainer::find($id);

        return view('trainers.show', compact('trainer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Trainer $trainer)
    {
        return view('trainers.edit', compact('trainer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trainer $trainer)
    {
        
         /*Tratamiento de Archivos para Editar*/
        /*******************************************************************************************/
        /*
         *Se toma todo lo que viene en la variable request except el archivo
         */
        $trainer->fill($request->except('avatar'));
        /*******************************************************************************************/
        /*
         *Revisar si nuestro request contiene un archivo
         *Si este existe, lo tratamos de manera diferente, obtenemos el archivo
         *Le asignamos un nuevo nombre
         *Actualizar el path que estamos asignando dentro de nuestra base de datos
         *Movemos nuestro archivo a la carpeta public/images
         */
        if($request->hasFile('avatar')){
            $file = $request->file('avatar');
            $nameFile = time().$file->getClientOriginalName();
            $trainer->avatar = $nameFile; 
            $file->move(public_path().'/images/', $nameFile);
        }
        /*******************************************************************************************/
        $trainer->save();

        return 'update';
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
