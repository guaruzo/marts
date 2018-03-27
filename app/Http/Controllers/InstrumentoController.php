<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Instrumento;
Use App\Http\Requests\InstrumentoFormRequest;

class InstrumentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $instrumentos = Instrumento::all();
        return view('lista_instrumentos', compact('instrumentos'));
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

    public function formInstrumentos()
    {
       return view('instrumentos');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InstrumentoFormRequest $request)
    {
         $ins = new Instrumento(array(
        'ins' => $request->get('ins'),
       

        ));
        $ins->save();

        return redirect('instrumentos')->with('status','Todo con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $instrumento= Instrumento::whereid($id)->firstOrFail();
        return view('ficha_instrumento', compact('instrumento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $instrumento = Instrumento::whereid($id)->firstOrFail();
        return view('instrumento_edit', compact('instrumento'));
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
         $instrumento = Instrumento::whereid($id)->firstOrFail();
      $instrumento->ins = $request->get('ins');
      
         
     $instrumento->save();
     return redirect(action('InstrumentoController@edit', $instrumento->id))->with('status', 'El instrumento '.$id.' ha sido actualizado!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $instrumento = Instrumento::whereid($id)->firstOrFail();
         $instrumento->delete();
         return redirect('/lista_instrumentos')->with('status', 'El instrumento '.$id.' ha sido borrado');
    }
}
