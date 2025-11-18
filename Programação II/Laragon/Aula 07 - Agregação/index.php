<?php 
	require_once './side/turma.php';

	$aluno1 = new Aluno("Marco", 404010);
	$turma1 = new Turma("Ciencia da Computacao 2024");

	$aluno1->exibirNome();
	$turma1->exibirAlunos();
?>