@extends('layout.app',["current"=> "a"])

@section('body')
<div class="jumbotron">
    <h1 class="display-4">Hello, world!</h1>
    <p class="lead">Esta agenda de contatos é meu primeiro projeto.</p>
    <hr class="my-4">
    <p>Projeto criado para seleção Programador Junior 1º fase do Instituto Flexpeak.</p>
    <p class="lead">
      <a class="btn btn-primary btn-lg" href="/contatos" role="button">Get Agenda</a>
    </p>
  </div>

@endsection