<?php

class Pedido{
	private $itens = [];

	function adicionarItem($item){
		array_push($this->itens, $item);
	}

	function exibirItemPorNumero($numeroItem){
		echo $this->itens[$numeroItem]->exibirDetalhes();
	}

	function somarValorTotal(){
		$total = 0;

		for ($i = 0; $i < count($this->itens); $i++){
			$total += $this->itens[$i]->getValor();
		}

		echo "R$ " . $total;
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

	function exibirDetalhes(){
		echo "Nome: " . $this->nome . ". Valor: " . $this->preco;
	}
}

?>