<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clientes;
use App\Telefones;
use App\Documentos;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Clientes::all();
        return view('clientes-index', ['clientes' => $clientes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientes-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        Clientes::create ([
            'nome' => $request->nome,
            'sexo' => $request->sexo
        ]);

        return redirect()->route('clientes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $clientes = Clientes::findOrFail($id);
        $informacoes = $clientes[$id];
        return view('clientes-show', ['clientes' => $clientes, 'clienteid' => $informacoes]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $clientes = Clientes::findOrFail($id);
        return view('clientes-edit', ['clientes' => $clientes]);
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
        $clientes = Clientes::findOrFail($id);

        $clientes->update([
            'nome'=> $request->nome,
            'sexo'=> $request->sexo,
        ]);
        
        return redirect()->route('clientes.index');   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function destroy($id)
    {
        try{

            Clientes::destroy($id);
            return redirect()->route('clientes.index');

        }catch(\Exception $e){
            $this->Error('Não foi possível excluir. Este cliente possui mais informações relacionadas.');
        }
        return $this->index();
        
    }

    public function Error($Exception){
        echo "<script>alert('".$Exception."');</script>";
    }
}
