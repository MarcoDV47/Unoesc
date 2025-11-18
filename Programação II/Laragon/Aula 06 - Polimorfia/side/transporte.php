<?php

	class Transporte{
		function calcularTarifa($distancia, $precoGasolina, $divisor){
			echo "Transporte: " . $distancia * ($precoGasolina / $divisor);
		}
	}
	class Onibus extends Transporte{
		function calcularTarifa($distancia, $precoGasolina, $divisor){
			echo "Onibus: " . $distancia * ($precoGasolina / $divisor);
		}
	}	
	class Metro extends Transporte{
		function calcularTarifa($distancia, $precoGasolina, $divisor){
			echo "Metro: " . $distancia * ($precoGasolina / $divisor);
		}
	}
	class Taxi extends Transporte{
		function calcularTarifa($distancia, $precoGasolina, $divisor){
			echo "Taxi: " . $distancia * ($precoGasolina / $divisor);
		}
	}
?>