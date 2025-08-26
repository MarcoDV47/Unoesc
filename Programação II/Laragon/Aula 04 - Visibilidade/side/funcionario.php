<?php

class Funcionario{
	private $nome;
	protected $salario;

	function __construct($nome, $salario){
		$this->nome = $nome;
		$this->salario= $salario;
	}

	function getSalario(){
		echo "Sou " . $this->nome . ". E recebo: " . $this->salario;
	}
}
?>