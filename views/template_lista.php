<div class="container">
    	<?php
    	for ($linha=0; $linha<$numero_linhas; $linha++):
    		$quant_animes_prox = $linha*$numero_colunas+$numero_colunas;
    		if($quant_animes < $quant_animes_prox){
    			$num_colunas_exibir = $quant_animes%$numero_colunas;
    		}
    	?>
		    <div class="row">
				<?php
				for($coluna=0; $coluna<$num_colunas_exibir; $coluna++):
					$posicao_anime = $linha*$numero_colunas+$coluna;
				?>
				  <div class="col-sm-6 col-md-4">
				    <div class="thumbnail">
				    	<img src="<?php echo $animes[$posicao_anime]->getEnderecoImagem(); ?>" width="280px" height="170px" alt="Sem Imagem">
					    <div class="caption">
					    	<h3><?php echo $animes[$posicao_anime]->getTitulo(); ?></h3>
					        <p><?php echo $animes[$posicao_anime]->getDescricao(); ?></p>
					    </div>
              <div class="row">
              <div class="col-md-6">
               <p><a href="index.php?rota=remover&id=<?php echo $animes[$posicao_anime]->getId(); ?>" class="btn btn-danger" role="button">remover</a></p>
              </div>
              <div class="col-md-6">
              <p><a href="index.php?rota=edicao&id=<?php echo $animes[$posicao_anime]->getId(); ?>" class="btn btn-primary" role="button">editar</a></p>
            </div>
            </div>
            </div>
				  </div>
				<?php endfor;?>
			</div>
		<?php endfor;?>
</div>
