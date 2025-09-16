<?php

class Carrinho{
	private $produtos = [];
	private $total;

	function adicionarItem($item){
		array_push($this->produtos, $item);
	}

	function somarValorTotal(){
		$total = 0;

		for ($i = 0; $i < count($this->produtos); $i++){
			$total += $this->produtos[$i]->getValor();
		}

		$this->total = $total;
		echo $total;
	}
}

class Item{
	private $nome;
	private $preco;

	function __construct($nome, $preco){
		$this->nome = $nome;
		$this->preco = $preco;
	}

	function getValor(){
		return $this->preco;
	}
}
?>