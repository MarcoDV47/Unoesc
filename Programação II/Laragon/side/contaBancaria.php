<?php

	class ContaBancaria{
		private $titular;
		private $saldo;
	
		function __construct($titular, $saldo){
			$this->titular = $titular;
			$this->saldo = $saldo;
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