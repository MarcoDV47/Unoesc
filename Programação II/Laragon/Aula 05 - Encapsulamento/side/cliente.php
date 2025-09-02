<?php

class Cliente{
	private $nome;
	private $cpf;

	function __construct($nome, $cpf){
		$this->nome = $nome;
		$this->cpf = $cpf;
	}

	function getDados(){
		echo $this->nome;
		echo $this->cpf;
	}

	function setNome($novoNome){
		if (strlen($novoNome) > 0) {
			$this->nome = $novoNome;
			echo "Nome Alterado";
			return;
		}
		echo "Nome não deve estar vazio!";
	}

	function cancelarCPF(){
		$this->cpf = 0;
		$this->nome = null;
		echo "CPF cancelado com sucesso!";
	}
}

?>