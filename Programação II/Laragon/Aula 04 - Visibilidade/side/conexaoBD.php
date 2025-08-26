<?php 

class ConexaoBD{
	
	private function conectar(){
		echo "conexão reestabelecida";
	}
	function getConexao(){
		$this->conectar();
	}
}
?>