<?php

class Product
{
	private static int $instanceCount = 0;
	private int $id;
	private string $name;
	private float $price;
	private string $description;

	function __construct(string $name, float $price, string $description)
	{
		self::$instanceCount++;
        $this->id = self::$instanceCount; 
		$this->setName($name);
		$this->setPrice($price);
		$this->setDescription($description);
	}

	//Getters
	public function getId() : int
	{
		return $this->id;
	}	
	public function getName() : string
	{
		return $this->name;
	}
	public function getPrice() : float
	{
		return $this->price;
	}
	public function getDescription() : string
	{
		return $this->description;
	}

	//Setters
	public function setName(string $name) : void
	{
		$this->name = $name;
	}
	public function setPrice(float $price) : void
	{
		$this->price = $price;
	}
	public function setDescription(string $description) : void
	{
		$this->description = $description;
	}
}

?>