<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Documentos;
use App\Clientes;

class DocumentosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Clientes::all();
        $documentos = Documentos::all();
        return view('documentos-index', ['documentos' => $documentos, 'clientes' => $clientes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clientes = Clientes::all();
        return view('documentos-create', ['clientes'=>$clientes]);
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $input = $request->all();
        Documentos::create($input);

        return redirect()->route("documentos.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $clientes = Clientes::all();
        $documentos = Documentos::findOrFail($id);
        return view('documentos-show', ['clientes' => $clientes, 'documentos' => $documentos]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $clientes = Clientes::all();
        $documentos = Documentos::findOrFail($id);
        return view('documentos-edit', ['clientes' => $clientes, 'documentos'=> $documentos]);
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
        Documentos::find($id)->update($request->all());
        
       return redirect()->route('documentos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Documentos::destroy($id);
        return redirect()->route('documentos.index');
    }
}
