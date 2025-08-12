<?php
	class Contato{
		private $nome; 
		private $telefone;
		private $email;

		function __construct($nome, $telefone, $email){
			$this->nome = $nome;
			$this->telefone = $telefone;
			$this->email = $email;
		}

		function getInfo(){
			echo "$this->nome. <br>";
		}
	}
?>