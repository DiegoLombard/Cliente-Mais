@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
          
                <ol class="breadcrumb card-header">
                    <li><a href="{{route('cliente.index')}}">Clientes &nbsp; </a></li>
                    <li class="active ">/ editar</li>
                </ol>
                <div class="card-body">

               
                   <p><strong>Cliente: {{$cliente->nome}}</strong></p>
                    <form action="{{route('cliente.atualizar', $cliente->id)}}" method="post">
                    {{ csrf_field()}}    
                    <input type="hidden" name="_method" value ="put">
                    <div class="form-group" {{ $errors->has('nome') ? 'has-error': ''}}>
                            <label for="nome" >Nome:</label>
                            <input type="text" name="nome" class="form-control"  value="{{$cliente->nome}}" >
                            @if ($errors->has('nome'))
                            <span class="help-block">
                                <strong>{{$errors->first('nome')}}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group" {{ $errors->has('email') ? 'has-error': ''}}>
                            <label for="email">Email:</label>
                            <input type="email" name="email" class="form-control"   value="{{$cliente->email}}" >
                            @if ($errors->has('emai'))
                            <span class="help-block">
                                <strong>{{$errors->first('email')}}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="form-group" {{ $errors->has('endereco') ? 'has-error': ''}}>
                            <label for="endereco">Endereço:</label>
                            <input type="text" name="endereco" class="form-control" value="{{$cliente->endereco}}"   >
                            @if ($errors->has('endereco'))
                            <span class="help-block">
                                <strong>{{$errors->first('endereco')}}</strong>
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
