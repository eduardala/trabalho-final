<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ClientesPedidos;
use App\Clientes;
use App\Pedidos;

class ClientesPedidosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Clientes::all();
        $pedidos = Pedidos::all();
        $clientespedidos = ClientesPedidos::all();
        return view('clientespedidos-index', ['clientespedidos'=> $clientespedidos, 'pedidos' => $pedidos, 'clientes' => $clientes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clientes = Clientes::all();
        $pedidos = Pedidos::all();
        $clientespedidos = ClientesPedidos::all();
        return view('clientespedidos-create', ['clientespedidos'=> $clientespedidos,'clientes'=>$clientes, 'pedidos'=>$pedidos]);
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
        $cp = ClientesPedidos::create($input);
        return redirect()->route("pc.index");
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
        $pedidos = Pedidos::all();
        $clientespedidos = ClientesPedidos::find($id);
        return view('clientespedidos-show', ['clientespedidos' => $clientespedidos,
                    'clientes' => $clientes, 'pedidos' => $pedidos]);
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
        $pedidos = Pedidos::all();
        $clientespedidos = ClientesPedidos::findOrFail($id);
        return view('clientespedidos-edit', ['clientespedidos' => $clientespedidos, 'clientes' => $clientes, 'pedidos'=> $pedidos]);
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
        ClientesPedidos::find($id)->update($request->all());

        return redirect()->route('pc.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ClientesPedidos::destroy($id);
        return redirect()->route('pc.index');
    }
}