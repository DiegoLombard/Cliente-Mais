@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
            <ol class="breadcrumb card-header">
            <li class= "active">Cliente Mais - Sistema de Gerenciamento de Clientes</li>
            </ol>
                <div class="card-body">
               
                

               
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>Seja Bem Vindo(a). Para iniciar, clique em entrar.</p>
                   
                    
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
