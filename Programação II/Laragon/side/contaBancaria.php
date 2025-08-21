<?php

	class ContaBancaria{
		private $titular;
		private $saldo;
		private $numero;
	
		function __construct($titular, $saldo){
			$this->titular = $titular;
			$this->saldo = $saldo;
			$this->numero = rand(1, 1000);
		}

		function exibirDados(){
			echo "Conta numero: $this->numero de $this->titular, com $this->saldo de saldo.";
		}	
		
		function getSaldo(){
			echo "Tenho $this->saldo de saldo.";
		}

		function addSaldo($quantia){
			$this->saldo += $quantia;
		}
		
		function removeSaldo($quantia){
			$this->saldo -= $quantia;
		}
	}

?>