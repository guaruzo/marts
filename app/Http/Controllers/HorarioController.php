<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Horario;
use App\Http\Requests\HorarioFormRequest;
class HorarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $horarios = Horario::all();
        return view('lista_horarios', compact('horarios'));
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
     public function formHorarios()
    {
        return view('horario');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $horario = new Horario(array(
        'horario' => $request->get('horario'),
       

        ));
        $horario->save();

        return redirect('horarios')->with('status','Todo con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $horario= Horario::whereid($id)->firstOrFail();
        return view('ficha_horario', compact('horario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $horario = Horario::whereid($id)->firstOrFail();
        return view('horario_edit', compact('horario'));
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
         $horario = Horario::whereid($id)->firstOrFail();
      $horario->horario = $request->get('horario');
      
         
     $horario->save();
     return redirect(action('HorarioController@edit', $horario->id))->with('status', 'El horario '.$id.' ha sido actualizado!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $horario = Horario::whereid($id)->firstOrFail();
         $horario->delete();
         return redirect('/lista_horarios')->with('status', 'El horario '.$id.' ha sido borrado');
    }
}
