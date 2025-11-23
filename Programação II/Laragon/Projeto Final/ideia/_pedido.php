<?php

class _Pedido
{
	private array $shopCart = [];
	private float $total = 0;
	private Client $client;
	private Address $address;
	private bool $isDelivered = false;

	function __construct(Client $client, Address $address)
	{
		$this->setClient($client);
		$this->setAddress($address);
	}

	//Getters
	public function getTotal(): float
	{
		foreach($this->shopCart as $product)
		{
			$this->total += $product->getPrice();
		}
		return $this->total;
	}

	public function getClient(): Client
	{
		return $this->client;
	}

	public function getAddress(): Address
	{
		return $this->address;
	}

	public function getIsDelivered()
	{
		return $this->isDelivered;
	}

	//Setters
	public function setClient(Client $client): void
	{
		$this->client = $client;
	}
	public function setAddress(Address $address): void
	{
		$this->address = $address;
	}
	public function setIsDelivered(bool $isDelivered): void
	{
		$this->isDelivered = $isDelivered;
	}

	//Funcoes Proprias

	public function addItem($product)
	{
		if(is_array($product))
		{
			for($i = 0; $i < count($product); $i++)
			{
				$this->addItem($product[$i]);	
			}
		}
		else $this->shopCart[] = $product;
	}

	public function addMultipleItems($product, $quantity)
	{
		for ($i = 0; $i < $quantity; $i++)
		{
			$this->addItem($product);
		}
	}

	public function showProductNames()
	{
		foreach($this->shopCart as $product)
		{
			echo $product->getName();
			echo "<br/>";
		}
	}
}

?>