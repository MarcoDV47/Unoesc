<?php

class Store
{
	private string $name;
	public array $menu = [];
	private array $orders = [];

	function __construct($name)
	{
		$this->setName($name);
	}

	//Getters
	public function getName() : string
	{
		return $this->name;
	}
	
	//Setters
	public function setName(string $name) : void
	{
		$this->name = $name;
	}

	public function getMenu() : array
	{
		return $this->menu;
	}	

	public function getOrders() : array
	{
		return $this->orders;
	}	

	public function addMenuItems($product)
	{
		if(is_array($product))
		{
			foreach($product as $p)
			{
				if (!in_array($p, $this->menu)) 
				{
					$this->menu[] = $p;
				} 
				else echo $p->getName();
			}
		} else 
		{
			if (!in_array($product, $this->menu)) 
			{
				$this->menu[] = $product;
			}
		}
	}

	public function addOrder(Order $order)
	{
		if(is_array($order))
		{
			foreach($order as $o)
			{
				if (!in_array($o, $this->orders)) 
				{
					$this->orders[] = $o;
				} 
			}
		} else 
		{
			if (!in_array($order, $this->orders)) 
			{
				$this->orders[] = $order;
			}
		}
	}

	public function removeItems($product)
	{
		if(is_array($product))
		{
			foreach($product as $p)
			{
				if (in_array($p, $this->menu)) 
				{
					$indexNumber = array_search($p, $this->menu);
					unset($this->menu[$indexNumber]);
				} 
				else echo "Produto não consta no menu!";
			}
		} else 
		{
			if (in_array($product, $this->menu)) 
			{
				$indexNumber = array_search($product, $this->menu);
				unset($this->menu[$indexNumber]);
			}
		}
		$this->menu = array_values($this->menu);
	}

	public function removeOrder($order)
	{
		if(is_array($order))
		{
			foreach($order as $o)
			{
				if (in_array($o, $this->orders)) 
				{
					$indexNumber = array_search($o, $this->orders);
					unset($this->orders[$indexNumber]);
				} 
			}
		} else 
		{
			if (in_array($order, $this->orders)) 
			{
				$indexNumber = array_search($order, $this->orders);
				unset($this->orders[$indexNumber]);
			}
		}
		$this->orders = array_values($this->orders);
	}
}

?>