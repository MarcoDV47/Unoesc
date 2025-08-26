<?php

class Gerente extends Funcionario{

	function ajustarSalario($porcentagem, $funcionario){
		$funcionario->salario *= $porcentagem;
	}
}
?>