@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <ol class="breadcrumb card-header">
                    <li><a href="{{route('cliente.index')}}">Clientes &nbsp; </a></li>
                    <li class="active ">/ Detalhes</li>
                </ol>
                <div class="card-body">
                    <p>Cliente: {{$cliente->nome}}</p>
                    <p>Cliente: {{$cliente->email}}</p>
                    <p>Cliente: {{$cliente->endereco}}</p>

               
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    
                   
                    
                    <table class ='table table-bordered'>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Título</th>
                                <th>Número</th>
    
                                <th>Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                               @foreach ($cliente->telefones as $telefone)
                                   
                                    
                            <tr>
                                <th scope="row"  >{{$telefone->id}}</th>
                                <td>{{$telefone->titulo}}</td>
                                <td>{{$telefone->telefone}}</td>
                                
                                <td>
                                   <p>
                                    <a href="{{route('telefone.editar',$telefone->id)}}" class="btn btn-default">Editar</a> &nbsp;
                                    <a href="javascript:confirm('Deletar esse Telefone?') ? window.location.href='{{route('telefone.deletar',$telefone->id)}}'  : false " class="btn btn-danger">Deletar</a>
                                    </p>
                                </td>
                            
                            </tr>
                            @endforeach
                        </tbody>
                        
                    </table>
                    <p>
                        <a class='btn btn-info' href="{{route('telefone.adicionar', $cliente->id)}}">Adicionar Telefone</a>
                    </p>

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
