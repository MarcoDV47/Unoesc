<?php
	class Retangulo{
		private $largura;
		private $altura;

		function __construct($largura, $altura){
			$this->largura = $largura;
			$this->altura = $altura;
		}

		function calcularArea(){
			return $this->largura * $this->altura;
		}

		function calcularPerimetro(){
			return (2 * $this->altura) + (2 * $this->largura);
		}
	}
?>