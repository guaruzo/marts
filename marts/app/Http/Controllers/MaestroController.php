<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Maestro;
use App\Http\Controllers\MaestroController;
class MaestroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $maestros = Maestro::all();
        return view('lista_maestros', compact('maestros'));
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
    public function formMaestro()
    {
        return view('maestros');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $maestro = new Maestro(array(

        'nom' => $request->get('nom'),
        'dir' => $request->get('dir'),
        'tel' => $request->get('tel')

        ));

        $maestro->save();
        return redirect('maestros')->with('status', 'Guardado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $maestro= Maestro::whereid($id)->firstOrFail();
        return view('ficha_maestro', compact('maestro'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $maestro = Maestro::whereid($id)->firstOrFail();
        return view('maestro_edit', compact('maestro'));
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
         $maestro = Maestro::whereid($id)->firstOrFail();
      $maestro->nom = $request->get('nom');
      $maestro->dir = $request->get('dir');
      $maestro->tel = $request->get('tel');
         
     $maestro->save();
     return redirect(action('MaestroController@edit', $maestro->id))->with('status', 'El maestro '.$id.' ha sido actualizado!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $maestro = Maestro::whereid($id)->firstOrFail();
         $maestro->delete();
         return redirect('/lista_maestros')->with('status', 'El maestro '.$id.' ha sido borrado');
    }
}
