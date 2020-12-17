<?php

namespace App\Http\Controllers;

use App\Models\Telefone;
use Illuminate\Http\Request;

class TelefoneController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function adicionar(Request $request, $id)
    {
        $cliente = \App\Models\Cliente::find($id);
        return view('telefone.adicionar', compact('cliente'));
    }
    public function salvar(\App\Http\Requests\TelefoneRequest $request, $id)
    {
        $telefone = new \App\Models\Telefone;
        $telefone->titulo = $request->input('titulo');
        $telefone->telefone = $request->input('telefone');

        \App\Models\Cliente::find($id)->addTelefone($telefone);
    
        
        $request->session()->flash('flash_message',[
            'msg' =>"Telefone adicionado com sucesso.",
            'class' =>"alert-success"
        ]);
        return redirect()->route('cliente.detalhe', $id);
    }
    


    public function editar($id)
    {
        $telefone = \App\Models\Telefone::find($id);
        if (!$telefone){
            \Session::flash('flash_message',[
                'msg' =>"Nenhum Telefone encontrado.",
                'class' =>"alert-danger"
            ]);
            return redirect()('cliente.detalhe', compact($telefone->cliente->id));
            }
       
        return view('telefone.editar', compact('telefone'));
    }
    public function atualizar(\App\Http\Requests\TelefoneRequest $request, $id)
    {
        
        $telefone = \App\Models\Telefone::find($id);
        $telefone->update($request->all());
    
        \Session::flash('flash_message',[
            'msg' =>"Telefones atualizados com sucesso.",
            'class' =>"alert-success"
        ]);
         
            
        return redirect()->route('cliente.detalhe',$telefone->cliente->id);

        
    
    }
    public function deletar($id)
    {
        
        $telefone = \App\Models\Telefone::find($id);
        $telefone->delete();
                
       
        \Session::flash('flash_message',[
            'msg' =>"Telefone deletado com sucesso.",
            'class' =>"alert-success"
        ]);
         
            
        return redirect()->route('cliente.detalhe',$telefone->cliente->id);

        
    
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Models\Telefone  $telefone
     * @return \Illuminate\Http\Response
     */
    public function show(Telefone $telefone)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Telefone  $telefone
     * @return \Illuminate\Http\Response
     */
    public function edit(Telefone $telefone)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Telefone  $telefone
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Telefone $telefone)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Telefone  $telefone
     * @return \Illuminate\Http\Response
     */
    public function destroy(Telefone $telefone)
    {
        //
    }
}
