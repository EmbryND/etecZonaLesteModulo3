<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ArMario Games - Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="{{url('imagens/favicon.ico')}}">
    <link rel="stylesheet" href="{{url('cssLoja/loja.css')}}">
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
    <!-- Seção Playstation -->
    <h2 class="secao_playstation"><img class="icone_secao" src="{{url('imagens/playstation.png')}}" alt="PlayStation"></h2>
    <div class="produtos_playstation">
        <div class="produto_item">
            <img class="icones_produtos" src="https://images-americanas.b2w.io/produtos/4646885354/imagens/sony-ps-vita-slim-1gb-novo-lacrado/4646885362_1_large.jpg" alt="PSVita">
            <p class="nome_playstation">Sony PSVita Slim 1GB Novo Lacrado</p>
            <p class="preco_playstation">R$2.299,00</p>
        </div>
        <div class="produto_item">
            <img class="icones_produtos" src="https://http2.mlstatic.com/D_NQ_NP_2X_923283-MLA40388393976_012020-F.webp" alt="PS2">
            <p class="nome_playstation">Sony PlayStation 2 Slim Standard Charcoal black</p>
            <p class="preco_playstation">R$579,99</p>
        </div>
        <div class="produto_item">
            <img class="icones_produtos" src="https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcTpKb4oTgqXSILru2xGUE6omHA3JgTPwc3Hra-qZxMHW3wGdN1kW2MvEP6ziQB5gI-sX3TIW2ZkCmCqM3E5Q39ro9fxap6Veka6UHQuUEywFNTfT0D02FHM&usqp=CAE" alt="PS5">
            <p class="nome_playstation">Sony Playstation Console PS5 Digital Slim</p>
            <p class="preco_playstation">R$2.499,99</p>
        </div>
    </div>

    <!-- Seção Xbox -->
    <h2 class="secao_xbox"><img class="icone_secao" src="{{url('imagens/xbox.png')}}" alt="Xbox"></h2>
    <div class="produtos_xbox">
        <div class="produto_item">
            <img class="icones_produtos" src="https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcQ5-u0VoDge-mBpAeEpBRfMGSSYYwB0xvGOLcNAbIJeIuDl6dvC6FvKRYQ2VxTzclZ5WjEIFPYlAOZ9d1SATQIi3blTGODN5khVOWNIXOJOrHmLud6Cq2P1sg&usqp=CAE" alt="Xbox Series">
            <p class="nome_xbox">Console Xbox Series S 512GB Branco</p>
            <p class="preco_xbox">R$2.599,00</p>
        </div>
        <div class="produto_item">
            <img class="icones_produtos" src="https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcRwsiZvYa-Mlf4DLnajLfzIueu8s0SCB5z3ULRqzuXGAog2hZnuU5hpku_h2upIjRhYKk4CVMcGqHXR0LE3ejuq6IWFBlRgqb73txLALTNhV5aUuI7ADfhpyw&usqp=CAE" alt="Xbox 360">
            <p class="nome_xbox">Console Xbox 360 Slim 4GB - Microsoft</p>
            <p class="preco_xbox">R$629,91</p>
        </div>
        <div class="produto_item">
            <img class="icones_produtos" src="https://cdn.awsli.com.br/300x300/1258/1258259/produto/70079984/0f00be7f96.jpg" alt="Xbox One X">
            <p class="nome_xbox">Console Xbox One X 1TB - Microsoft</p>
            <p class="preco_xbox">R$1.990,00</p>
        </div>
    </div>

    <!-- Seção Nintendo -->
    <h2 class="secao_nintendo"><img class="icone_secao" src="{{url('imagens/nintendo.png')}}" alt="Nintendo"></h2>
    <div class="produtos_nintendo">
        <div class="produto_item">
            <img class="icones_produtos" src="https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcTmeKeCTZOdCo2DDwmfjFj4joBNAHZf290PqF-jjgoM7iEFGCJChtn58VnAeNoCkRanq6RLaiyzI-lvGj5BzBWBm79o8kT6&usqp=CAE" alt="Wii U">
            <p class="nome_nintendo">Console Nintendo Wii U, Deluxe, 32GB, Preto</p>
            <p class="preco_nintendo">R$1.199,00</p>
        </div>
        <div class="produto_item">
            <img class="icones_produtos" src="https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcT3C9QJLbRii3yWYkR1ECUJfYMqIsrCjo2jhEEGg3dECbzVVindw2OYRo96Tj0jW8pmB3xysPMXUo7tVtZwDyB-t884_tUz1lTJxNeC2VE&usqp=CAE" alt="Nintendo Switch">
            <p class="nome_nintendo">Console Nintendo Switch 32gb Mario Kart 8 Deluxe</p>
            <p class="preco_nintendo">R$1.1990,00</p>
        </div>
        <div class="produto_item">
            <img class="icones_produtos" src="https://i5.walmartimages.com/seo/Nintendo-64-N64-System-Console-Used_3f05ad58-eab0-45ab-a66a-03d99113a617_1.4854fae622648fca1b9163c24ba59e13.jpeg" alt="Nintendo 64">
            <p class="nome_nintendo">Console Nintendo 64</p>
            <p class="preco_nintendo">R$1.299,99</p>
        </div>
    </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>