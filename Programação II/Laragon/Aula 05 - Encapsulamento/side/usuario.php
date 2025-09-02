<?php 

class Usuario {
	private $nome;
	private $senha;

	function __construct($nome, $senha){
		$this->nome = $nome;
		$this->senha = $senha;
	}

	function verificarSenha($senhaDigitada){
		if($senhaDigitada == $this->senha) {
			echo "Senha Correta";
			return true;
		}
		echo "Senha Incorreta";
		return false;
	}
}
?>