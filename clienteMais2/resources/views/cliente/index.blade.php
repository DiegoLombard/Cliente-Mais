@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
            <ol class="breadcrumb card-header">
            <li class= "active">Clientes</li>
            </ol>
                <div class="card-body">
                <p>
                    <a class='btn btn-info' href="{{route('cliente.adicionar')}}">Adicionar Cliente</a>
                </p>
                

               
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    
                   
                    
                    <table class ='table table-bordered'>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>nome</th>
                                <th>E-mail</th>
                                <th>Encereço</th>
                                <th>Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($clientes as $cliente)
                  

                  
                            <tr>
                                <th scope="row"  >{{$cliente->id}}</th>
                                <td>{{$cliente->nome}}</td>
                                <td>{{$cliente->email}}</td>
                                <td>{{$cliente->endereco}}</td>
                                <td>
                                    <p><a href="{{route('cliente.detalhe',$cliente->id)}}" class="btn btn-default">Detalhes</a> &nbsp;
                                    <a href="{{route('cliente.editar',$cliente->id)}}" class="btn btn-default">Editar</a> &nbsp;
                                    <a href="javascript:confirm('Deletar esse Cliente?') ? window.location.href='{{route('cliente.deletar',$cliente->id)}}'  : false " class="btn btn-danger">Deletar</a> 
                                    </p>
                                </td>
                            
                            </tr>
                        </tbody>
                        @endforeach
                    </table>

                    
                    <div align='center' >
                    {!! $clientes->links('pagination::bootstrap-4') !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
  