<?php

	class Notificacao{
		function enviar(){
			echo "Notificacao: Notificacao recebida";
		}
	}
	class Email extends Notificacao{
		function enviar(){
			echo "Email: Email enviado";
		}
	}
	class SMS extends Notificacao{
		function enviar(){
			echo "SMS: SMS enviado";
		}
	}
	class Push extends Notificacao{
		function enviar(){
			echo "Push: Push enviado";
		}
	}
?>