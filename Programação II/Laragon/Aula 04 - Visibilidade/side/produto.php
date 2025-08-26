<?php
	class Produto{
		private $nome;
		private $preco;
		private $quantidade;

		function __construct($nome, $preco, $quantidade){
			$this->nome = $nome;
			$this->preco= $preco;
			$this->quantidade= $quantidade;
		}

		function getPreco(){
			echo "sou $this->nome, e custo $this->preco contos.";
		}

		function setPreco($novoPreco){
			$this->preco = $novoPreco;
		}

		// 9 
		function exibirDetalhes(){
			echo "Temos $this->quantidade $this->nome(s) que custam $this->preco em estoque. ";
		}
	}
?>