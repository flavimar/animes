<?php
    include "views/cabecalho.html";
    require "conexao.php";
    require "models/anime.php";
    require "models/repositorio_animes.php";
  

    $repositorio_animes = new RepositorioAnimes($conexao);

    $rota = "lista";

    if(array_key_exists("rota", $_GET)){
      $rota = (string) $_GET["rota"];
    }

    if(is_file("controllers/{$rota}.php")){
      require "controllers/{$rota}.php";
    } else {
      echo "Rota não encontrada";
    }

    include "views/rodape.html";
?>
