<?php

Implemente uma classe Turma que agregue uma lista de Aluno. Cada aluno possui
nome e matrícula. A turma deve permitir adicionar alunos e exibir todos.

class Turma{
	private $alunos = [];
	private $nome;

	function __construct($nome){
		$this->nome = $nome;
	}

	function adicionarAlunos(array $aluno){
		foreach($alunos as $aluno){
			if ($aluno instanceof Aluno) {
				$this->alunos[] = $aluno; 
			}
		}
	}

	public function exibirAlunos(){
		foreach($alunos as $aluno){
			echo $aluno->exibirNome();
		}
	}
}

class Aluno{
	private $nome;
	private $matricula;

	function __construct($nome, $matricula){
		$this->nome = $nome;
		$this->matricula = $nome;
	}

	public function exibirNome(){
		echo $this->nome;
	}
}

?>