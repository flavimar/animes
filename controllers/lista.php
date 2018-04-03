<?php

	$animes = $repositorio_animes->busca_animes();
  $numero_colunas = 3;
  $quant_animes = count($animes);
  $numero_linhas = $quant_animes/$numero_colunas;

  $num_colunas_exibir = $numero_colunas;

	require __DIR__."/../views/template_lista.php";  
?>
