@extends('layout.app', ["current"=> "contatos"]) 


@section('body')
    <div class="card border">
        <div class="card-body">
            <h5 class="card-title">Contatos</h5>
            <table class="table table-ordered table-hover">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>E-mail</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($conts ?? '' as $cont)
                <tr>
                    @if($cont->imagem)
                        <td><img class="avatar" src="{{asset('storage/' . $cont->imagem)}}"></td>
                    @else
                        <td><img class="avatar" src="{{asset('imagens/avatar.png')}}"></td>
                    @endif
                    <td>{{$cont->nome}}</td>
                    <td>{{$cont->telefone}}</td>
                    <td>{{$cont->email}}</td>
                    <td>
                       <a href="/contatos/editar/{{$cont->id}}" class="btn btn-sm btn-primary">Editar</a>
                       <a href="/contatos/apagar/{{$cont->id}}" class="btn btn-sm btn-danger">Apagar</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
        <div class="card-footer">
            <a href="/contatos/novo" class="btn btn-sm btn-primary" role="button">Novo Contato</a>
        </div>
    </div>
@endsection