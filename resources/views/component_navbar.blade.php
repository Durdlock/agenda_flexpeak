<nav class="navbar navbar-expand-lg navbar-dark bg-dark rounded">
    <a class="navbar-brand" >Agenda</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse"
     data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbar">
      <ul class="navbar-nav">
        <li @if($current =="contatos") class="nav-item active" @else class="nav-item" @endif>
          <a class="nav-link" href="/contatos">Contatos </a>
        </li>
        <li @if($current =="cadastrar") class="nav-item active" @else class="nav-item" @endif>
            <a class="nav-link" href="/contatos/novo">Cadastrar</a>
          </li>
              
      </ul>
    </div>
  </nav>