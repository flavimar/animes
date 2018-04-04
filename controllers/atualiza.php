<?php


	$anime_atualizado = new Anime();
	$anime_atualizado->setId($_POST["id"]);
  $anime_atualizado->setTitulo($_POST["titulo"]);
  $anime_atualizado->setDescricao($_POST["descricao"]);

   $repositorio_animes->atualiza($anime_atualizado);

	 header('Location: index.php?rota=lista');
?>
