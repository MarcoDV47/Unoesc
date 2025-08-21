<?php

class LivroComplexo{
	private $titulo;
	private $autor;
	private $anoPublicacao;
	private $numeroPaginas;
	private $disponivel;

	function __construct(
		$titulo, 
		$autor, 
		$anoPublicacao, 
		$numeroPaginas, 
		$disponivel)
		{
		if($anoPublicacao > date("Y")){
			return;
		}
		if($numeroPaginas > 0){
			return;
		}	
		if($autor != null || $titulo != null){
			return;
		}
		$this->titulo = $titulo;
		$this->autor = $autor;
		$this->anoPublicacao = $anoPublicacao;
		$this->numeroPaginas = $numeroPaginas;
		$this->disponivel = $disponivel;
	}

	function setTitulo($titulo){
		$this->titulo = $titulo;
	}

	function setAutor($autor){
		$this->autor = $autor;
	}

	function setAnoPublicacao($anoPublicacao){
		$this->anoPublicacao = $anoPublicacao;
	}

	function setNumeroPaginas($numeroPaginas){
		$this->numeroPaginas = $numeroPaginas;
	}

	function setDisponivel($disponivel){
		$this->disponivel = $disponivel;
	}
	
	function getTitulo(){
		return $this->titulo;
	}

	function getAno(){
		return $this->anoPublicacao;
	}

	function getAutor(){
		return $this->autor;
	}
}
?>