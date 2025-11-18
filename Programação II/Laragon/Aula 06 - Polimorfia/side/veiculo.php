<?php

	class Veiculo{
		private float $posicao;

		function mover($velocidade){
			$this->posicao += $velocidade;
			echo $this->posicao;
		}
	}

	class Carro extends Veiculo{
		private float $posicao = 0;

		function mover($velocidade){
			$this->posicao += $velocidade;
			echo "Carro: " . $this->posicao;
		}
	}

	class Bicicleta extends Veiculo{
		private float $posicao = 0;

		function mover($velocidade){
			$this->posicao += $velocidade;
			echo "Bicicleta: " . $this->posicao;
		}
	}

	class Aviao extends Veiculo{
		private float $posicao = 0;

		function mover($velocidade){
			$this->posicao += $velocidade;
			echo "Aviao: " . $this->posicao;
		}
	}

?>