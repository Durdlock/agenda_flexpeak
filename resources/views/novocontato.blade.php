@extends('layout.app', ["current"=>"cadastrar"])

@section('body')
    <div class="card border">
        <div class="card-body">
            <form action="/contatos" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                        
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" name="nome" id="nome"
                        required="required" maxlength="100" placeholder="Nome Completo">

                        <label for="telefone">Telefone</label>
                        <input type="text" class="form-control"  maxlength="13" name="telefone" id="telefone"
                        required="required" placeholder="981420249" pattern="[0-9]+$">

                        <label for="email">E-mail</label>
                        <input type="email" class="form-control" name="email" id="email"
                        required="required" placeholder="georgelucassilvadesousa@gmail.com">

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