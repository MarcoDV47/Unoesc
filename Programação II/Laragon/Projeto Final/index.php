<?php

require_once "./side/product.php";
require_once "./side/order.php";
require_once "./side/client.php";
require_once "./side/address.php";
require_once "./side/store.php";

$address1 = new Address("D", 11, 2);

$product1 = new Product("Coca",	4.99, "gelada");
$product2 = new Product("Fanta", 19.99, "melhor ainda");
$product3 = new Product("Cheetos", 19.99, "salgadinho");
$product4 = new Product("Brigadeiro", 2.99, "doce");
$product5 = new Product("Red Bull", 18.99, "energetico");

$client1 = new Client("Marco", "DWODJAI", $address1);

$store1 = new Store("Cafe e cia");
$store1->addMenuItems(
	[
		$product1,
		$product2,
		$product3,
		$product4
	]
);

$store1->addMenuItems($product5);
echo $store1->getMenu();

$order1 = new Order($client1);
$order1->addMultipleItems($product1, 2);
$order1->addItem($product2);
$order1->addItem([$product2, $product1, $product2]);
echo "<br/>";
echo $order1->getTotal();
echo "<br/>";
echo $order1->getProductNames();
echo "<br/>";
echo ($order1->getClient())->getName(); // Busca nome do cliente
echo "<br/>";
echo ($order1->getClient())->getAddress()->getRoomNumber(); // Busca numero do andar do cliente

?>