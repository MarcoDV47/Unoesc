<?php

class Gerente extends Funcionario{

	function __construct(){}

	function ajustarSalario($porcentagem, $funcionario){
		$funcionario->salario *= $porcentagem;
	}
}
?>