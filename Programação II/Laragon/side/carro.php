<?php
	class Carro{
		private $marca;
		private $modelo;
		private $ano;

		function __construct($marca, $modelo, $ano){
			$this->marca = $marca;
			$this->modelo = $modelo;
			$this->ano = $ano;
		}

		function exibirInfo(){
			echo "Marca: $this->marca;<br> Modelo: $this->modelo;<br> Ano: $this->ano;";
		}
	}
?>