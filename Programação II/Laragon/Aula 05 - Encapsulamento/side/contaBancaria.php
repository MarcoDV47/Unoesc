<?php

class ContaBancaria{
	private $saldo;

	function mostrarSaldo(){
		echo $this->saldo;
	}

	function depositar($quantia){
		$this->saldo += $quantia;
	}

	function sacar($quantia){
		$this->saldo -= $quantia;
	}
}
?>