<?php

require_once "./side/product.php";
require_once "./side/item.php";
require_once "./side/address.php";
require_once "./side/student.php";
require_once "./side/store.php";
require_once "./side/subject.php";
require_once "./side/course.php";
require_once "./side/order.php";

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

// ALUNOS

$student1 = new Student("440468", "Marco", "1234", $course1, 4);
$student2 = new Student("440469", "Lucas", "12345", $course1, 4);
$student3 = new Student("440470", "Jorge", "123456", $course1, 4);

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

//----------- Funções -----------

// PEDIDOS

$order1 = new Order($store1, $student1, $address1);
$order1->addItem($product1);
$order1->addItem($product1, 5);
$order1->addItems([$product1, $product5], [2, 1]);
$order1->addItems([$product2, $product4, $product3],[1, 2, 1]);
$order2 = new Order($store1, $student2, $address2);
$order2->addItems([$product5, $product3], [2, 4]);
$order3 = new Order($store1, $student3, $address2);
$order3->addItems([$product3, $product4, $product2], [9, 2, 1]);

echo "<h2>Estudante</h2>";
echo "<h3>Informações estudante 1</h3>";
echo "<ul>";
echo "<li>Nome: {$student1->getName()}</li>";
echo "<li>Id: {$student1->getEnrollment()}</li>";
echo "<li>Senha 1234 confere: " . (($student1->isPasswordValid("1234")) ? ("true") : ("false")) .  "</li>";
echo "<li>Senha 12345 confere: " . (($student1->isPasswordValid("12345")) ? ("true") : ("false")) .  "</li>";
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
echo "<li><strong>Menu:</strong></li>";
	echo "<ul>";
		foreach ($store1->getMenu() as $i) 
		{
			echo "<li>{$i->getName()}</li>";
		}
	echo "</ul>";
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
echo "<li><strong>Matérias do terceiro semestre:</strong></li>";
	echo "<ul>";
		foreach ($course1->getSemesterClasses(2) as $c) 
		{
			echo "<li>{$c->getName()}</li>";
		}
	echo "</ul>";
echo "<li><strong>Todas as matérias:</strong></li>";
	echo "<ul>";
		foreach ($course1->getTotalClasses() as $semester) 
		{
			foreach ($semester as $class) 
			{
				echo "<li>{$class->getName()}</li>";
			}
			echo "<br />";
		}
	echo "</ul>";
echo "<li><strong>Selecionar matéria da sexta-feira do primeiro semestre:</strong></li>";
echo "<ul><li>{$course1->getSpecificClass(0, 4)->getName()}</ul></li>";
echo "</ul>";

echo "<h2>Pedido</h2>";
echo "<h3>Informações Pedido 1</h3>";
echo "<ul>";
echo "<li>Nome do estudante: {$order1->getStudent()->getName()}</li>";
echo "<li>Total do pedido: {$order1->getTotal()}</li>";
echo "<li>Foi entregue: " . (($order1->getIsDelivered()) ? ("true") : ("false")) .  "</li>";
echo "<li>Data de compra: {$order1->getDate()}</li>";
echo "<li><strong>Produtos no carrinho:</strong></li>"; 
	echo "<ul>";
		foreach ($order1->getItems() as $i) 
		{
			echo "<li>{$i->getQuantity()} {$i->getProduct()->getName()}</li>";
		}
	echo "</ul>";
echo "<li><strong>Endereço</strong></li>";
	echo "<ul>";
		echo "<li>Bloco: {$order1->getAddress()->getBlock()}</li>";
		echo "<li>Andar: {$order1->getAddress()->getRoomFloor()}</li>";
		echo "<li>Número da sala: {$order1->getAddress()->getRoomNumber()}</li>";
	echo "</ul>";
echo "</ul>";

echo "<h2>Loja</h2>";
echo "<h3>Informações Loja 1</h3>";
echo "<ul>";
echo "<li><strong>Produtos no carrinho:</strong></li>"; 
	echo "<ul>";
		$contagem = 0;
		foreach ($store1->getOrders() as $order) 
		{
			$contagem++;
			echo "<li>Pedido {$contagem}</li>";
			echo "<ul>";
			echo "<li><strong>Cliente:</strong> {$order->getStudent()->getName()}</li>";
			foreach($order->getItems() as $item)
			{
				echo "<li>{$item->getQuantity()} {$item->getProduct()->getName()}</li>";
			}
			echo "<li><strong>Endereço</strong></li>";
				echo "<ul>";
					echo "<li>Bloco: {$order->getAddress()->getBlock()}</li>";
					echo "<li>Andar: {$order->getAddress()->getRoomFloor()}</li>";
					echo "<li>Número da sala: {$order->getAddress()->getRoomNumber()}</li>";
				echo "</ul>";
			echo "</ul>";
		}
	echo "</ul>";
echo "</ul>";

?>