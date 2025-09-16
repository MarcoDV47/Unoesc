<?php

class Config{
	protected $parametros;

	function __construct($parametros){
		$this->parametros = $parametros;
	}

	function getParametros(){
		echo $this->parametros;
	}
}
?>