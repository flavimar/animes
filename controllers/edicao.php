<?php
 $anime = $repositorio_animes->busca_anime($_GET["id"]);

require __DIR__."/../views/formulario_edicao.php";
 ?>
