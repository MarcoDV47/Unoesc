<?php

	class Impressora{
		function imprimir($impressao){
			echo "Impressora: " . $impressao;
		}
	}

	class PDF extends Impressora{
		function imprimir($impressao){
			echo "PDF: " . $impressao;
		}
	}

	class Texto extends Impressora{
		function imprimir($impressao){
			echo "Texto: " . $impressao;
		}
	}

	class Imagem extends Impressora{
		function imprimir($impressao){
			echo "Imagem: " . $impressao;
		}
	}
?>