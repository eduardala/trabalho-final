<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Telefones;
use App\Clientes;

class TelefonesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Clientes::all();
        $telefones = Telefones::all();
        return view('telefones-index', ['telefones' => $telefones, 'clientes' => $clientes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clientes = Clientes::all();

        return view('telefones-create',['clientes'=>$clientes]);
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
        Telefones::create($input);

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
        //$clientes= Telefones::with('nome')->get();
        $telefones = Telefones::findOrFail($id);
        return view('telefones-show', ['cliente' => $clientes, 'telefones' => $telefones]);
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
        $telefones = Telefones::findOrFail($id);
        return view('telefones-edit', ['clientes' => $clientes, 'telefones'=> $telefones]);
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
        Telefones::find($id)->update($request->all());

        return redirect()->route('telefones.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Telefones::destroy($id);
        return redirect()->route('telefones.index');
    }
}
