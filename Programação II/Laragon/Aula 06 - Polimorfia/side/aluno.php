<?php
	class Aluno {
		private $nome;
		private $nota;

		function __construct($nome, $nota){
			$this->nome = $nome;
			$this->nota = $nota;
		}

		function verificarNotas(){
			if ( 0 <= $this->nota && $this->nota <= 10) {
				return true;
            }
			return false;
		}

		function alterarNota($novaNota){
			if ($this->verificarNotas()) {
				$this->nota = $novaNota;
            }
		}

		function getNome(){
			echo $this->nome;
		}

		function getNota(){
			echo $this->nota;
		}
	}
?>