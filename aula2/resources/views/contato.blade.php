<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ArMario Games - Contato</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="{{url('imagens/favicon.ico')}}">
    <link rel="stylesheet" href="{{url('cssLoja/contato.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sigmar&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
</head>
<body>
<header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
  <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
    <img class="icone_pagina" src="{{url('imagens/armariogames.jpg')}}" alt="Logo ArMario Games">
    <span class="fs-4">ArMario Games</span>
  </a>
  <ul class="nav nav-pills">
    <li class="nav-item">
      <a href="/" class="nav-link btn btn-primary {{ request()->is('/') ? 'active' : '' }}">Home</a>
    </li>
    <li class="nav-item">
      <a href="{{ route('form') }}" class="nav-link btn btn-primary {{ request()->is('contato') ? 'active' : '' }}">Contato</a>
    </li>
  </ul>
</header>

<main class="container">
  <h2 class="contato_titulo">Fale Conosco</h2>
  <div class="contato_info">
    <div class="contato_item">
      <h5>Endereço</h5>
      <p>Rua Exemplo, 123, Centro - São Paulo, SP</p>
    </div>
    <div class="contato_item">
      <h5>Telefone</h5>
      <p>(11) 1234-5678</p>
    </div>
    <div class="contato_item">
      <h5>E-mail</h5>
      <p>contato@armariogames.com.br</p>
    </div>
  </div>

  <div class="social_links">
    <h3>Redes Sociais</h3>
    <p>Siga-nos para promoções e novidades!</p>
    <div class="social_icons">
      <a href="https://facebook.com/ArMarioGames" target="_blank" class="social_icon">
        <img src="https://upload.wikimedia.org/wikipedia/en/thumb/0/04/Facebook_f_logo_%282021%29.svg/1024px-Facebook_f_logo_%282021%29.svg.png" alt="Facebook">
      </a>
      <a href="https://instagram.com/ArMarioGames" target="_blank" class="social_icon">
        <img src="https://upload.wikimedia.org/wikipedia/commons/a/a5/Instagram_icon.png" alt="Instagram">
      </a>
      <a href="https://twitter.com/ArMarioGames" target="_blank" class="social_icon">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6f/Logo_of_Twitter.svg/2491px-Logo_of_Twitter.svg.png" alt="Twitter">
      </a>
    </div>
  </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>