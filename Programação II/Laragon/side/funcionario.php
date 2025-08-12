<?php

class Funcionario{
	private $nome;
	private $salario;

	function __construct($nome, $salario){
		$this->nome = $nome;
		$this->salario= $salario;
	}

	function ajustarSalario($porcentagem){
		$this->salario *= $porcentagem;
		return $this->salario;
	}
}
?>