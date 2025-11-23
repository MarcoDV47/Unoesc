<?php

require_once "./side/product.php";
require_once "./side/order.php";
require_once "./side/client.php";
require_once "./side/address.php";
require_once "./side/store.php";
require_once "./side/course.php";
require_once "./side/subject.php";

//-------------------------------------- DECLARAÇÕES -----------------------------------

// PRODUTOS

$product1 = new Product("Coca",	4.99, "Refrigerante popular");
$product2 = new Product("Fanta", 19.99, "Refrigerante sabor laranja");
$product3 = new Product("Cheetos", 19.99, "Salgadinho");
$product4 = new Product("Brigadeiro", 2.99, "Doce pequeno");
$product5 = new Product("Red Bull", 18.99, "Energético popular");

// ENDERECOS

$address1 = new Address("D", 11, 2);
$address2 = new Address("K", 9, 3);

// CLIENTES

$client1 = new Client("440468", "Marco", "1234");

// AULAS

{
	$subject1 = new Subject("Algoritmos e Lógica de Programação", $address1);
	$subject2 = new Subject("Princípios e Aplicações da Computação", $address1);
	$subject3 = new Subject("Matemática e Tecnologia I", $address1);
	$subject4 = new Subject("Linguagem e Método Científico", $address1);
	$subject5 = new Subject("Circuitos Digitais", $address1);
	$subject6 = new Subject("Estrutura de Dados", $address1);
	$subject7 = new Subject("Matemática e Tecnologia II", $address1);
	$subject8 = new Subject("Lógica e Matemática Discreta", $address1);
	$subject9 = new Subject("Ética, Cultura e Contemporaneidade", $address1);
	$subject10 = new Subject("Arquitetura de Computadores", $address1);
	$subject11 = new Subject("Estatística", $address1);
	$subject12 = new Subject("Programação I", $address1);
	$subject13 = new Subject("Matemática e Tecnologia III", $address1);
	$subject14 = new Subject("Banco de Dados I", $address1);
	$subject15 = new Subject("Matemática Financeira", $address1);
	$subject16 = new Subject("Programação II", $address1);
	$subject17 = new Subject("Sistemas Operacionais", $address1);
	$subject18 = new Subject("Engenharia de Software I", $address1);
	$subject19 = new Subject("Banco de Dados II", $address1);
	$subject20 = new Subject("Empreendedorismo e Inovação", $address1);
	$subject21 = new Subject("Redes de Computadores", $address1);
	$subject22 = new Subject("Teoria dos Grafos", $address1);
	$subject23 = new Subject("Engenharia de Software II", $address1);
	$subject24 = new Subject("Programação III", $address1);
	$subject25 = new Subject("Interação Humano Computador", $address1);
	$subject26 = new Subject("Inteligência Artificial", $address1);
	$subject27 = new Subject("Programação IV", $address1);
	$subject28 = new Subject("Modelagem e Simulação de Sistemas", $address1);
	$subject29 = new Subject("Linguagens e Métodos Formais", $address1);
	$subject30 = new Subject("Administração e Gerência de Redes", $address1);
	$subject31 = new Subject("Aplicações Distribuídas", $address1);
	$subject32 = new Subject("Trabalho de Conclusão de Curso I", $address1);
	$subject33 = new Subject("Visão Computacional", $address1);
	$subject34 = new Subject("Análise e Complexidade de Algoritmos", $address1);
	$subject35 = new Subject("Tópicos Avançados", $address1);
	$subject36 = new Subject("Paradigmas de Linguagens de Programação", $address1);
	$subject37 = new Subject("Trabalho de Conclusão de Curso II", $address1);
	$subject38 = new Subject("Gestão de Sistemas de Informação", $address1);
	$subject39 = new Subject("Compiladores", $address1);
	$subject40 = new Subject("Eletivo II", $address1);
	$subject41 = new Subject("Atividade Curricular Complementar", $address1);
	$subject42 = new Subject("Auditoria e Segurança da Informação", $address1);
}

// CURSO

$course1 = new Course("Ciência da Computação");

$course1->addAllClasses(
	[
		[
			$subject1,
			$subject2,
			$subject3,
			$subject4,
			$subject5
		],
		[
			$subject6,
			$subject7,
			$subject8,
			$subject9,
			$subject10
		],
		[
			$subject11,
			$subject12,
			$subject13,
			$subject14,
			$subject15
		],
		[
			$subject16,
			$subject17,
			$subject18,
			$subject19,
			$subject20
		],
		[
			$subject21,
			$subject22,
			$subject23,
			$subject24,
			$subject25
		],
		[
			$subject26,
			$subject27,
			$subject28,
			$subject29,
			$subject30,
			$subject31
		],
		[
			$subject32,
			$subject33,
			$subject34,
			$subject35,
			$subject36
		],
		[
			$subject37,
			$subject38,
			$subject39,
			$subject40,
			$subject41,
			$subject42
		]
	]
);

// LOJA

$store1 = new Store("Café e Cia");

$store1->addMenuItems(
	[
		$product1,
		$product2,
		$product3,
		$product4
	]
);

$store1->addMenuItems($product5);

//----------- Funcoes -----------

// PEDIDOS

$order1 = new Order($client1, $address1);
$order1->addMultipleItems($product1, 2);
$order1->addItem($product2);
$order1->addItem([$product2, $product4, $product3]);

// ZONA DE TESTES

echo "<h2>Cliente</h2>";
echo "<h3>Informações Cliente 1</h3>";
echo "<ul>";
echo "<li>Nome: {$client1->getName()}</li>";
echo "<li>Id: {$client1->getEnrollment()}</li>";
echo "<li>Senha 1234 confere: " . (($client1->validatePassword("1234")) ? ("true") : ("false")) .  "</li>";
echo "<li>Senha 12345 confere: " . (($client1->validatePassword("12345")) ? ("true") : ("false")) .  "</li>";
echo "</ul>";

echo "<h2>Endereço</h2>";
echo "<h3>Informações Endereço 1</h3>";
echo "<li>Nome: {$subject1->getName()}</li>";
echo "<li>Bloco: {$subject1->getAddress()->getBlock()}</li>";
echo "<li>Sala: {$subject1->getAddress()->getRoomNumber()}</li>";
echo "<li>Andar: {$subject1->getAddress()->getRoomFloor()}</li>";
echo "</ul>";

echo "<h2>Produto</h2>";
echo "<h3>Informações Produto 1</h3>";
echo "<ul>";
echo "<li>Id: {$product1->getId()}</li>";
echo "<li>Nome: {$product1->getName()}</li>";
echo "<li>Descrição: {$product1->getDescription()}</li>";
echo "<li>Preço: {$product1->getPrice()}</li>";
$product1->setPrice(10.99);
echo "<li>Preço atualizado: {$product1->getPrice()}</li>";
echo "</ul>";

echo "<h2>Loja</h2>";
echo "<h3>Informações Loja 1</h3>";
echo "<ul>";
echo "<li>Nome: {$store1->getName()}</li>";
echo "<li>Menu:</li>";
	 $store1->showMenu();
echo "</ul>";

echo "<h2>Matéria</h2>";
echo "<h3>Informações Matéria 1</h3>";
echo "<ul>";
echo "<li>Nome: {$subject1->getName()}</li>";
echo "<li>Bloco: {$subject1->getAddress()->getBlock()}</li>";
echo "<li>Sala: {$subject1->getAddress()->getRoomNumber()}</li>";
echo "<li>Andar: {$subject1->getAddress()->getRoomFloor()}</li>";
echo "</ul>";

echo "<h2>Curso</h2>";
echo "<h3>Informações Curso 1</h3>";
echo "<ul>";
echo "<li>Nome: {$course1->getName()}</li>";
echo "<li>Matérias totais no curso: {$course1->getTotalClassesNumber()}</li>";
echo "<li>Todas as matérias: </li>";
	 $course1->showTotalClasses();
echo "<li>Selecionar matéria: </li>";
echo $course1->getSpecificClass(0, 4);
echo "</ul>";

echo "<h2>Pedido</h2>";
echo "<h3>Informações Pedido 1</h3>";
echo "<ul>";
echo "<li>Nome do cliente: {$order1->getClient()->getName()}</li>";
echo "<li>Total do pedido: {$order1->getTotal()}</li>";
echo "<li>Foi entregue: " . (($order1->getIsDelivered()) ? ("true") : ("false")) .  "</li>";
echo "<li>Produtos no carrinho: </li>"; 
$order1->showProductNames();
echo "</ul>";

	//Order atrelado ao Endereco
	//Subject atrelado ao Endreco
	/*
		$diaSemana Date.Now();
		$order2 = new Order(...);

		Order{

			private Client $client;
			private Address $address;

		function __constructor(Client $client, Address $address)
		{
			$weekDay = Date.Now.WeekDay();

			LEMBRAR DE COLOCAR CURSO NO CLIENTE

			$cursoCliente = $this->client->getCourse();

			$aulaCliente = cursoCliente->getSpecificClass($semestre, $weekDay);

			$this->address = $aulaCliente->getAddress();
		}
	*/

?>