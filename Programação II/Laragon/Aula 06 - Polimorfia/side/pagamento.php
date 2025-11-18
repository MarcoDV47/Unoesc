<?php

	class Pagamento{
		function processar(){
			echo "Processado";
		}
	}
	class Cartao extends Pagamento{
		function processar(){
			echo "Cartao processado";
		}
	}
	class Pix extends Pagamento{
		function processar(){
			echo "Pix processado";
		}
	}
	class Boleto extends Pagamento{
		function processar(){
			echo "Boleto processado";
		}
	}
?>