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
			if($novoPreco < 0) {
				echo "Preço não pode ser negativo!";
				return;
			}
			$this->preco = $novoPreco;
			echo "Preço alterado";
		}

		function exibirDetalhes(){
			echo "Temos $this->quantidade $this->nome(s) que custam $this->preco em estoque. ";
		}
	}
?>