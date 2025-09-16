<?php

	class Calculadora{
		function somar($a, $b = null, $c = null){
			if($c !== null){
				echo $a + $b + $c;
			}
			elseif($b !== null){
				echo $a + $b;
			}
			elseif(is_array($a)){
				echo array_sum($a);
			}
		}
	}

?>