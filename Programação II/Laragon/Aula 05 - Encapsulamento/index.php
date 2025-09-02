<?php

	require_once './side/contaBancaria.php';
	require_once './side/produto.php';
	require_once './side/cliente.php';
	require_once './side/usuario.php';
	require_once './side/funcionario.php';
	require_once './side/gerente.php';
	require_once './side/pedido.php';
	require_once './side/carro.php';
	require_once './side/aluno.php';
	require_once './side/config.php';
	require_once './side/configManager.php';
	require_once './side/carrinhoCompras.php';

	echo "<h1>Exercicios</h1>";

	echo "<h2>Conta Bancaria:</h2>";

	$conta1 = new ContaBancaria();
	$conta1->depositar(50);
	$conta1->mostrarSaldo();
	$conta1->sacar(40);;
	$conta1->mostrarSaldo();


	echo "<h2>Produto:</h2>";

	$produto1 = new Produto("Revolver", 300, 1);
	$produto1->getPreco();
	$produto1->setPreco(500);
	echo "<br>";
	$produto1->getPreco();
	echo "<br>";
	$produto1->exibirDetalhes();
	echo "<br>";


	echo "<h2>Cliente:</h2>";

	$cliente1 = new Cliente("Marco", 041.578);
	echo "<br>";
	$cliente1->setNome("Claudio");
	echo "<br>";
	$cliente1->cancelarCPF();
	

	echo "<h2>Usuario:</h2>";

	$usuario1 = new Usuario("Marco", 1234);
	$usuario1->verificarSenha(12345);
	echo "<br>";
	$usuario1->verificarSenha(1234);


	echo "<h2>Funcionario / Gerente:</h2>";

	$funcionario1 = new Funcionario("Marco", 4000);
	$gerente1 = new Gerente();
	$gerente1->ajustarSalario(1.20, $funcionario1);
	$funcionario1->getSalario();


	echo "<h2>Pedido:</h2>";

	$pedido1 = new Pedido();
	$item1 = new ItemPedido("Revolver", 300);
	$item2 = new ItemPedido("Tomate", 5);
	$item3 = new ItemPedido("Joelheira", 80);

	$pedido1->adicionarItem($item1);
	$pedido1->adicionarItem($item2);
	$pedido1->adicionarItem($item3);

	$pedido1->exibirItemPorNumero(1);
	echo "<br>";
	$pedido1->somarValorTotal();


	echo "<h2>Carro:</h2> ";

	$carro1 = new Carro();
	$carro1->acelerar(120);
	$carro1->frear(40);

	
	echo "<h2>Aluno:</h2> ";

	$aluno1 = new Aluno("Ana", 8.5);
	$aluno1->getNota();
	echo "<br>";
	$aluno1->alterarNota(9);
	$aluno1->getNota();


	echo "<h2>Config:</h2>";

	$config1 = new Config("Mortadela");
	$config1->getParametros();
	echo "<br>";
	$configManager1 = new ConfigManager();
	$configManager1->setParametro("Bob Esponja", $config1);
	$config1->getParametros();

	
	echo "<h2>Carrinho de Compras:</h2>";

	$carrinho1 = new Carrinho();
	$carrinho1->adicionarItem(new Item("Sabao", 10));
	$carrinho1->adicionarItem(new Item("Sabonete", 20));
	$carrinho1->adicionarItem(new Item("Saboneteira", 5));

	echo "Sabao 10 + Sabonete 20 + Saboneteira 5 = ";
	echo $carrinho1->somarValorTotal();
	
?>