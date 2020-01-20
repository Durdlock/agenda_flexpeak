@extends('layout.app', ["current"=>"cadastrar"])

@section('body')
    <div class="card border">
        <div class="card-body">
            <form action="/contatos/{{$cont->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control {{$errors->has('nome')?'is-invalid':''}}" 
                        name="nome" id="nome" value="{{$cont-> nome}}">

                @if ($errors->has('nome'))
                        <div class="invalid-feedback">
                                {{$errors->first('nome')}}
                        </div>
                @endif

                        <label for="telefone">Telefone</label>
                        <input type="text" class="form-control {{$errors->has('telefone')?'is-invalid':''}}" 
                        name="telefone" id="telefone" value=" {{$cont-> telefone}}">
                
                @if ($errors->has('telefone'))
                        <div class="invalid-feedback">
                                {{$errors->first('telefone')}}
                        </div>
                @endif

                        <label for="email">E-mail</label>
                        <input type="text" class="form-control {{$errors->has('email')?'is-invalid':''}}"
                        name="email" id="email" value="{{$cont-> email}}">

                @if ($errors->has('email'))
                        <div class="invalid-feedback">
                                {{$errors->first('email')}}
                        </div>
                @endif

                        <label for="imagem">Imagem</label>
                        <input type="file" class="form-control" name="imagem" id="imagem">
                </div>
            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            <a href="/contatos">
                <button type="button" class="btn btn-danger btn-sm">Cancelar</button>
            </a>
            </form>
        </div>
    </div>
@endsection