<?php
	class Aluno {
		private $nome;
		private $media;

		function __construct($nome, $media){
			$this->nome = $nome;
			$this->media = $media;
		}

		function verificarAprovacao(){
			if ($this->media >= 7) {
				return true;
            }
			return false;
		}

		function getNome(){
			return $this->nome;
		}
	}
?>