@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
          
                <ol class="breadcrumb card-header">
                    <li><a href="{{route('cliente.index')}}">Clientes &nbsp; </a></li>
                    <li>/ <a href="{{route('cliente.detalhe', $telefone->cliente->id)}}">Detalhe &nbsp; </a></li>
                    <li class="active ">/ editar</li>
                </ol>
                <div class="card-body">

               
                    <p><strong>Cliente: {{$telefone->cliente->nome}}</strong></p>
                    <form action="{{route('telefone.atualizar', $telefone->id)}}" method="post">
                    {{ csrf_field()}}    
                    <input type="hidden" name="_method" value ="put">
                    <div class="form-group" {{ $errors->has('titulo') ? 'has-error': ''}}>
                            <label for="titulo" >titulo:</label>
                            <input type="text" name="titulo" class="form-control"  value="{{$telefone->titulo}}" >
                              @if ($errors->has('titulo'))
                            <span class="help-block">
                                <strong>{{$errors->first('titulo')}}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group" {{ $errors->has('telefone') ? 'has-error': ''}}>
                            <label for="telefone">Telefone:</label>
                            <input type="text" name="telefone" class="form-control"   value="{{$telefone->telefone}}" >
                              @if ($errors->has('telefone'))
                            <span class="help-block">
                                <strong>{{$errors->first('telefone')}}</strong>
                            </span>
                            @endif
                        </div>

                        
                        
                        <button class="btn btn-success">Atualizar</button>
                    </form>
                    
                
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
