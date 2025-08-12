<?php
	class ConversorTemperatura{

		function converterParaCelcius($temperatura){
			return ($temperatura - 32) * 5/9;
		}	

		function converterParaFahrenheit($temperatura){
			return ($temperatura * 9/5) + 32;
		}
	}
?>