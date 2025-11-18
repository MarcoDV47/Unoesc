<?php

	require_once './side/animal.php';
	require_once './side/calculadora.php';
	require_once './side/pagamento.php';
	require_once './side/notificacao.php';
	require_once './side/figuraGeometrica.php';
	require_once './side/veiculo.php';
	require_once './side/impressora.php';
	require_once './side/mensagem.php';
	require_once './side/transporte.php';

	echo "<h1>Exercicios</h1>";

	echo "<h2>Animais:</h2>";

	$cachorro1 = new Cachorro();
	$gato1 = new Gato();
	$passaro1 = new Passaro();
	$animais = [new Cachorro(), new Gato(), new Passaro()];
	foreach($animais as $animal){
		$animal->falar();
		echo "<br>";
	}

	echo "<h2>Calculadora:</h2>";

	$calculadora1 = new Calculadora();

	$calculadora1->somar(1, 2, 3);
	echo "<br>";
	$calculadora1->somar(1, 2);
	echo "<br>";
	$calculadora1->somar([1, 2, 3, 4, 5]);
	
	echo "<h2>Pagamento:</h2>";

	$pagamento1 = new Pagamento();
	$cartao1 = new Cartao();
	$pix1 = new Pix();
	$boleto1 = new Boleto();

	$pagamento1->processar();
	echo "<br>";
	$cartao1->processar();
	echo "<br>";
	$pix1->processar();
	echo "<br>";
	$boleto1->processar();
	
	echo "<h2>Notificacao:</h2>";

	$email1 = new Email();
	$sms1 = new SMS();
	$push1 = new Push();

	$email1->enviar();
	echo "<br>";
	$sms1->enviar();
	echo "<br>";
	$push1->enviar();


	echo "<h2>Figura Geometrica:</h2>";

	$quadrado1 = new Quadrado(10);
	$circulo1 = new Circulo(5);
	$retangulo1 = new Retangulo(10, 15);

	$quadrado1->calcularArea();
	echo "<br>";
	$circulo1->calcularArea();
	echo "<br>";
	$retangulo1->calcularArea();


	echo "<h2>Veiculo:</h2>";

	$carro1 = new Carro();
	$bicicleta1 = new Bicicleta();
	$aviao1 = new Aviao();

	$carro1->mover(30);
	echo "<br>";
	$bicicleta1->mover(10);
	echo "<br>";
	$aviao1->mover(200);


	echo "<h2>Impressora:</h2>";

	$pdf1 = new PDF();
	$texto1 = new Texto();
	$imagem1 = new Imagem();

	$pdf1->imprimir("TCC");
	echo "<br>";
	$texto1->imprimir("Bom dia");
	echo "<br>";
	$imagem1->imprimir("Pudim.png");


	echo "<h2>Mensagem:</h2>";

	$mensagem1 = new Mensagem();

	$mensagem1->formatar("HelLo WoRlD", "M");
	echo "<br>";
	$mensagem1->formatar("HelLo WoRlD", "m");
	echo "<br>";
	$mensagem1->formatar("HelLo WoRlD", "c");
	echo "<br>";
	$mensagem1->formatar("HelLo WoRlD");

	echo "<h2>Transporte:</h2>";

	$onibus1 = new Onibus();
	$metro1 = new Metro();
	$taxi1 = new Taxi();

	$onibus1->calcularTarifa(5, 7, 10);
	echo "<br>";
	$metro1->calcularTarifa(7, 4, 5);
	echo "<br>";
	$taxi1->calcularTarifa(3, 7, 5);

?>