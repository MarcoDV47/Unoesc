<?php

class ConfigManager extends Config{

	function __construct(){}

	function setParametro($novoParametro, $config){
		$config->parametros = $novoParametro;
	}
}

?>