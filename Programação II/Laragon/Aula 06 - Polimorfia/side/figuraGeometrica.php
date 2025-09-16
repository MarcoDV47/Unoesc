<?php

	abstract class FiguraGeometrica{
		abstract function calcularArea();
	}

	class Quadrado extends FiguraGeometrica{
		private $lado;

		public function __construct($lado){
			$this->lado = $lado;
		}
		function calcularArea(){
			echo $this->lado * $this->lado;
		}
	}
	
	class Circulo extends FiguraGeometrica{
		private $raio;

		public function __construct($raio){
			$this->raio = $raio;
		}
		function calcularArea(){
			echo round(pow($this->raio, 2) * pi(), 2);
		}
	}	
	class Retangulo extends FiguraGeometrica{
		private $base;
		private $altura;

		public function __construct($base, $altura){
			$this->base = $base;
			$this->altura = $altura;
		}

		public function calcularArea(){
			echo $this->base * $this->altura;
		}
	}
?>