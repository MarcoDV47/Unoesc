<?php

class Livro{
	private $titulo;
	private $autor;
	private $ano;

	function __construct($titulo, $autor, $ano){
		$this->titulo = $titulo;
		$this->autor = $autor;
		$this->ano = $ano;
	}

	function getAno(){
		return $this->ano;
	}

	function getNome(){
		return $this->titulo;
	}
}

?>