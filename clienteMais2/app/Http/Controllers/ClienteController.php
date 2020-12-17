<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $clientes = \App\Models\Cliente::paginate(10);
       
        return view('cliente.index', compact('clientes'));
    }
    public function detalhe($id)
    {
    $cliente = \App\Models\Cliente::find($id);
    return view('cliente.detalhe', compact('cliente'));
    }

    public function adicionar()
    {
        return view('cliente.adicionar');
    }
    public function salvar(\App\Http\Requests\ClienteRequest $request)
    {
        \App\Models\Cliente::create($request->all()); //salva
        $request->session()->flash('flash_message',[
            'msg' =>"Cliente adicionado com sucesso.",
            'class' =>"alert-success"
        ]);
      
        \Session::flash('flash_message',[
            'msg' =>"Cliente adicionado com sucesso.",
            'class' =>"alert-success"
        ]);
        return redirect()->route('cliente.adicionar');
    }
    public function editar($id)
    {
        $cliente = \App\Models\Cliente::find($id);
        if (!$cliente){
            \Session::flash('flash_message',[
                'msg' =>"Nenhum cliente encontrado.",
                'class' =>"alert-danger"
            ]);
            return redirect()->route('cliente.adicionar');
            }
        return view('cliente.editar', compact('cliente'));
       
    }
    public function atualizar(\App\Http\Requests\ClienteRequest $request, $id)
    {
        
        $cliente = \App\Models\Cliente::find($id)->update($request->all());
    
        \Session::flash('flash_message',[
            'msg' =>"Cliente atualizado com sucesso.",
            'class' =>"alert-success"
        ]);
         
            
        return redirect()->route('cliente.index');

        
    
    }
    public function deletar(Request $request, $id)
    {
        
        $cliente = \App\Models\Cliente::find($id);
        if(!$cliente->deletarTelefones()){
            \Session::flash('flash_message',[
                'msg' =>"Cliente não pode ser deletado.",
                'class' =>"alert-danger"
            ]);
            return redirect()->route('cliente.index');
        }
        $cliente->delete();
        \Session::flash('flash_message',[
            'msg' =>"Cliente deletado com sucesso.",
            'class' =>"alert-success"
        ]);
         
            
        return redirect()->route('cliente.index');

        
    
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(Cliente $cliente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cliente $cliente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cliente $cliente)
    {
        //
    }
}
