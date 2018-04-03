<?php


	$valido_todos = True;

	if(array_key_exists("titulo", $_POST)){
		$titulo = $_POST['titulo'];
	}else{
		$valido_todos = False;
	}

	if(array_key_exists("descricao", $_POST)){
		$descricao = $_POST['descricao'];
	}else{
		$valido_todos = False;
	}

	if(array_key_exists("imagem", $_FILES)){
		$imagem = $_FILES['imagem'];
		$nome_imagem = $imagem['name'];
		$endereco_imagem = "imagens/".$nome_imagem;
		move_uploaded_file($imagem['tmp_name'],$endereco_imagem);
	}else{
		$valido_todos = False;
	}

	if($valido_todos){
		$anime = new Anime($titulo,$descricao,$endereco_imagem);

		$repositorio_animes->adiciona($anime);

		header('Location: index.php?rota=lista');
	}
	
	require __DIR__."/../views/formulario.php";
?>
