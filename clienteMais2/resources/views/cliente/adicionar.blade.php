@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
          
                <ol class="breadcrumb card-header">
                    <li><a href="{{route('cliente.index')}}">Clientes &nbsp; </a></li>
                    <li class="active ">/ Adicionar</li>
                </ol>
                <div class="card-body">

               

                    <form action="{{route('cliente.salvar')}}" method="post">
                    {{ csrf_field()}}    
                    <div class="form-group {{ $errors->has('nome') ? 'has-error': ''}} ">
                            <label for="nome">Nome:</label>
                            <input type="text" name="nome" class="form-control" placeholder="João Bezzerra" >
                            @if ($errors->has('nome'))
                            <span class="help-block">
                                <strong>{{$errors->first('nome')}}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group {{ $errors->has('email') ? 'has-error': ''}}">
                            <label for="email">Email:</label>
                            <input type="email" name="email" class="form-control" placeholder="joaobezzerra@gmail.com" >
                            @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{$errors->first('email')}}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="form-group {{ $errors->has('endereco') ? 'has-error': ''}}">
                            <label for="endereco">Endereço:</label>
                            <input type="text" name="endereco" class="form-control" placeholder="Rua João, 42 - Bezerra - CE"   >
                            @if ($errors->has('endereco'))
                            <span class="help-block">
                                <strong>{{$errors->first('endereco')}}</strong>
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
