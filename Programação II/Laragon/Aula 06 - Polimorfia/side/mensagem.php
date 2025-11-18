<?php

	class Mensagem{
		function formatar($texto, $formatacao = null){
			if($formatacao === "M"){
				echo "Maiusculo: " . strtoupper($texto);
			}
			elseif($formatacao === "m"){
				echo "Minusculo: " . strtolower($texto);
			}
			elseif($formatacao === "c"){
				echo "Capitalizado: " . ucfirst(strtolower($texto));
			}
			else echo $texto;
		}
	}
?>