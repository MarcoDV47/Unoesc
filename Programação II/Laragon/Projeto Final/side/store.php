<?php

class Store
{
	private string $name;
	public array $menu = [];

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
}

?>