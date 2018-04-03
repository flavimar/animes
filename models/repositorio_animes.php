<?php
	class RepositorioAnimes{
		private $conexao;

		public function __construct($conexao){
			$this->conexao = $conexao;
		}

		//adiciona o anime ao banco
		public function adiciona($anime){
			$sql = "INSERT INTO anime (titulo,descricao,endereco_imagem) VALUES (:titulo, :descricao,:endereco_imagem)";

			$query = $this->conexao->prepare($sql);

			//executa o SQL
			$query->execute(['titulo'=>$anime->getTitulo(),'descricao'=>$anime->getDescricao(),'endereco_imagem'=>$anime->getEnderecoImagem()]);
		}

		//busca todos os animes
		public function busca_animes(){

			$sql = "SELECT * FROM anime";

			/*
			*isntrução que realiza a consulta de animes
			*PDO::FETCH_CLASS serve para perdir o retorno no modelo de uma classe
			*PDO::FETCH_PROPS_LATE serve para preencher os valores depois de executar o contrutor
			*/
			$resultado = $this->conexao->query($sql, PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Anime');

            $animes = [];

            foreach($resultado as $anime){
                $animes[] = $anime;
            }

   			return $animes;
		}

		//busca um aluno em específico
		public function busca_anime($id){
			$sql = "SELECT * FROM anime WHERE id=:id";

			$query = $this->conexao->prepare($sql);

			$query->execute(['id'=>$id]);


       $query->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'Anime');
       $anime = $query->fetch();
			return $anime;
		}
		//atualiza os dados de um aluno
		public function atualiza($aluno){
			$sql = "UPDATE aluno SET nome = :nome, matricula = :matricula WHERE id=:id";

			$query = $this->conexao->prepare($sql);

			$query->execute(['nome'=>$aluno->getNome(),'matricula'=>$aluno->getMatricula(), 'id'=>$aluno->getId()]);
		}

		//remove um aluno pelo id
		public function remove($id){
			$sql = "DELETE FROM anime WHERE id = :id";

			$query = $this->conexao->prepare($sql);

			$query->execute(['id'=>$id]);
		}
	}
?>
