@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
          
                <ol class="breadcrumb card-header">
                    <li><a href="{{route('cliente.index')}}">Clientes &nbsp; </a></li>
                    <li>/ <a href="{{route('cliente.detalhe', $cliente->id)}}">Detalhe &nbsp; </a></li>
                    <li class="active ">/ Adicionar</li>
                </ol>
                <div class="card-body">

               

                    <form action="{{route('telefone.salvar',$cliente->id)}}" method="post">
                    {{ csrf_field()}}    
                    <div class="form-group"  {{ $errors->has('titulo') ? 'has-error': ''}}>
                            <label for="titulo">Título:</label>
                            <input type="text" name="titulo" class="form-control" placeholder="Telefone de Casa" >
                            @if ($errors->has('titulo'))
                            <span class="help-block">
                                <strong>{{$errors->first('titulo')}}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group" {{ $errors->has('telefone') ? 'has-error': ''}}>
                            <label for="numero">Número:</label>
                            <input type="text" name="telefone" class="form-control" placeholder="(11) 4824-5675" >
                            @if ($errors->has('telefone'))
                            <span class="help-block">
                                <strong>{{$errors->first('telefone')}}</strong>
                            </span>
                            @endif
                        </div>

                        
                        
                        <button class="btn btn-success">Adicionar</button>
                    </form>
                    
                
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
