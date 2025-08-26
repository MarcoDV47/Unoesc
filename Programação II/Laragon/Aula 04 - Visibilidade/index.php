<?php

	require_once './side/produto.php';
	require_once './side/contaBancaria.php';
	require_once './side/funcionario.php';
	require_once './side/gerente.php';
	require_once './side/usuario.php';
	require_once './side/config.php';
	require_once './side/configManager.php';
	require_once './side/pedido.php';
	require_once './side/cliente.php';
	require_once './side/conexaoBD.php';

	echo "<h1>Exercicios</h1>";
	echo "<h2>Produto</h2>";

	$produto1 = new Produto("Revolver", 300, 1);
	$produto1->getPreco();
	$produto1->setPreco(500);
	echo "<br>";
	$produto1->getPreco();
	echo "<br>";
	$produto1->exibirDetalhes();
	echo "<br>";


	echo "<h2>Conta Bancaria:</h2> ";

	$conta1 = new ContaBancaria("Marco", 100);
	$conta1->getSaldo();
	$conta1->addSaldo(500);
	echo "<br>";
	$conta1->removeSaldo(100);
	$conta1->getSaldo();


	echo "<h2>Gerente:</h2> ";

	$funcionario1 = new Funcionario("Claudio", 5000);
	$funcionario1->getSalario();
	echo "<br>";
	$gerente1 = new Gerente("Gerente Bob", 10000);
	$gerente1->ajustarSalario(1.5, $funcionario1);
	$funcionario1->getSalario();
	

	echo "<h2>Usuario:</h2> ";

	$usuario1 = new Usuario("Marco", 1234);
	$usuario1->verificarSenha(12345);
	echo "<br>";
	$usuario1->verificarSenha(1234);


	echo "<h2>Config:</h2> ";

	$config1 = new Config("Mortadela");
	$config1->getParametros();
	echo "<br>";
	$configManager1 = new ConfigManager();
	$configManager1->setParametro("Bob Esponja", $config1);
	$config1->getParametros();


	echo "<h2>Pedido:</h2> ";

	$pedido1 = new Pedido();
	$item1 = new Item("Revolver", 300);
	$item2 = new Item("Tomate", 5);
	$item3 = new Item("Joelheira", 80);

	$pedido1->adicionarItem($item1);
	$pedido1->adicionarItem($item2);
	$pedido1->adicionarItem($item3);

	$pedido1->exibirItemPorNumero(1);
	echo "<br>";
	$pedido1->somarValorTotal();


	echo "<h2>Cliente:</h2> ";

	$cliente1 = new Cliente("Marco", 041.578, 589.78);
	echo $cliente1->nome;
	echo "<br>";
	$cliente1->nome = "Claudio";
	echo $cliente1->nome;


	echo "<h2>Conta Bancaria:</h2> ";

	$conta1->getSaldo();
	echo "<br>";
	$conta1->removeSaldo(200);
	$conta1->getSaldo();
	echo "<br>";
	$conta1->removeSaldo(2000);
	$conta1->getSaldo();


	echo "<h2>ConexaoBD:</h2> ";

	$conexaoBD1 = new ConexaoBD();
	$conexaoBD1->getConexao();
?>