<?php

class Store
{
	private string $name;
	public array $menu = [];

	function __construct($name)
	{
		$this->name = $name;
	}

	public function getMenu()
	{
		for($i = 0; $i < count($this->menu); $i++)
		{
			echo $this->menu[$i]->getName();
		}
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

	public function removeItems(array $product)
	{
		if(is_array($product))
		{
			foreach($product as $p)
			{
				if (in_array($p, $menu)) 
				{
					unset($this->menu[$p]);
				} 
				else echo "Produto não consta no menu!";
			}
		} else 
		{
			if (in_array($product, $menu)) 
			{
				unset($this->menu[$product]);
			}
		}
		$this->menu = array_values($this->menu);
	}
}

?>