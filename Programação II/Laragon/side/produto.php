<?php
	class Produto{
		private $nome;
		private $preco;
		private $quantidade;

		function __construct($nome, $preco){
			$this->nome = $nome;
			$this->preco= $preco;
		}

		function valorTotal(){
			echo "sou $this->nome, e custo $this->preco";
		}
	}
?>