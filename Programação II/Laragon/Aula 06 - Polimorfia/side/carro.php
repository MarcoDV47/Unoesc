<?php

class Carro{
	private $velocidade;

	function acelerar($aceleracao){
		if($aceleracao <= 0) return;
		if(($this->velocidade + $aceleracao) > 200){
			echo "Velocidade acima do permitido!";
			return;
		}
		if($this->velocidade < 200){
			$this->velocidade += $aceleracao;
			echo "Nova velocidade: " . $this->velocidade;
		}
	}

	function frear($frenagem){
		if($frenagem <= 0) return;
		if(($this->velocidade - $frenagem) < 0){
			echo "Velocidade abaixo do permitido!";
			return;
		}
		$this->velocidade -= $frenagem;
	}
}

?>