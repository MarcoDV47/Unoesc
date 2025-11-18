<?php

class Order
{
	private array $shopCart = [];
	private float $total = 0;
	private Client $client;

	function __construct(Client $client)
	{
		$this->client = $client;
	}

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
	
	public function getTotal()
	{
		foreach($this->shopCart as $product)
		{
			$this->total += $product->getValue();
		}
		return $this->total;
	}	

	public function getProductNames()
	{
		foreach($this->shopCart as $product)
		{
			echo $product->getName();
			echo "<br/>";
		}
	}

	public function getClient()
	{
		return $this->client;
	}
}

?>