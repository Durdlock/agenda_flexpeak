@extends('layout.app',["current"=> "a"])

@section('body')
<div class="jumbotron">
    <h1 class="display-4">Hello, world!</h1>
    <p class="lead">Esta agenda é meu primeiro herói, e peço que carinho extra no seu conteúdo.</p>
    <hr class="my-4">
    <p></p>
    <p class="lead">
      <a class="btn btn-primary btn-lg" href="/contatos" role="button">Get Agenda</a>
    </p>
  </div>

@endsection