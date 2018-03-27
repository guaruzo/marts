<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alumno;
use App\Http\Requests\AlumnoFormRequest;
class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
           $alumnos = Alumno::all();
        return view('lista_alumnos', compact('alumnos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function formAlumnos(Request $request)
    {
        return view('alumnos');
    }
    public function store(Request $request)
    {
        
        $alumno= new Alumno(array(
        'nom' =>$request->get('nom'),
        'dir'=>$request->get('dir'),
        'tel'=>$request->get('tel'),

        ));
        $alumno->save();

        return redirect('alumnos')->with('status','Todo con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $alumno= Alumno::whereid($id)->firstOrFail();
        return view('ficha_alumno', compact('alumno'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $alumno = Alumno::whereid($id)->firstOrFail();
        return view('alumno_edit', compact('alumno'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, AlumnoFormRequest $request )
    
       {
      $alumno = Alumno::whereid($id)->firstOrFail();
      $alumno->nom = $request->get('nom');
      $alumno->dir = $request->get('dir');
      $alumno->tel = $request->get('tel');
         
     $alumno->save();
     return redirect(action('AlumnoController@edit', $alumno->id))->with('status', 'El alumno '.$id.' ha sido actualizado!');

     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
         $alumno = Alumno::whereid($id)->firstOrFail();
         $alumno->delete();
         return redirect('/lista_alumnos')->with('status', 'El alumno '.$id.' ha sido borrado');

         

    }
}
