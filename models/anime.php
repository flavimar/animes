<?php
	class Anime{
		private $id;
		private $titulo;
		private $descricao;
		private $endereco_imagem;

		function __construct($titulo="sem",$descricao="",$endereco_imagem=""){
			$this->titulo = $titulo;
			$this->descricao = $descricao;
			$this->endereco_imagem = $endereco_imagem;
		}

		public function getId(){
			return $this->id;
		}

		public function setId($id){
			$this->id = $id;
		}

		public function getTitulo(){
			return $this->titulo;
		}

		public function setTitulo($titulo){
			$this->titulo = $titulo;
		}

		public function getDescricao(){
			return $this->descricao;
		}

		public function setDescricao($descricao){
			$this->descricao = $descricao;
		}

		public function getEnderecoImagem(){
			return $this->endereco_imagem;
		}

		public function setEnderecoImagem($endereco_imagem){
			$this->endereco_imagem = $endereco_imagem;
		}

	}
?>
