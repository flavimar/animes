<div class="container">
  <div class="row">
    <div class="col-md-6">
      <form method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label for="titulo">Título:</label>
          <input type="text" name="titulo" class="form-control" placeholder="Título" value="<?php echo $anime->getTitulo() ?>">
        </div>
        <div class="form-group">
          <label for="descricao">Descrição:</label>
          <input type="text" name="descricao" class="form-control" placeholder="Descrição" value="<?php echo $anime->getDescricao()?>">
        </div>
        <div class="form-group">
          <label for="imagem">Imagem:</label>
          <input type="file" name="imagem">
        </div>
        <button type="submit" class="btn btn-default">Salvar</button>
      </form>
    </div>
  </div>
</div>
