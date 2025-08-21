<?php
	class AlunoComplexo {
		public $nome;
		private $matricula;
		private $notas = [];
		private $media;

		function __construct($nome, $matricula){
			$this->nome = $nome;
			$this->matricula = $matricula;
		}

		function adicionarNota($nota){
			array_push($this->notas, $nota);
		}

		private function calcularMedia(){
			$soma = 0;
			foreach($this->notas as $nota){
				$soma += $nota;
			}
			$soma /= count($this->notas);
			$this->media = $soma;
		}

		function situacao(){
			$this->calcularMedia();
			if ($this->media >= 7) {
				return "Aprovado";
            }
			return "Reprovado";
		}	
	}
?>