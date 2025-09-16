<?php

	class Notificacao{
		function enviar(){
			echo "Notificacao recebida";
		}
	}
	class Email extends Notificacao{
		function enviar(){
			echo "Email enviado";
		}
	}
	class SMS extends Notificacao{
		function enviar(){
			echo "SMS enviado";
		}
	}
	class Push extends Notificacao{
		function enviar(){
			echo "Push enviado";
		}
	}
?>