<?php

	class Pagamento{
		function processar(){
			return "Processado";
		}
	}
	class Cartao extends Pagamento{
		function processar(){
			return "Cartao processado";
		}
	}
	class Pix extends Pagamento{
		function processar(){
			return "Pix processado";
		}
	}
	class Boleto extends Pagamento{
		function processar(){
			return "Boleto processado";
		}
	}
?>