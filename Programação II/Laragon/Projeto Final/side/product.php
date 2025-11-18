<?php

class Product
{
	private string $name;
	private float $price;
	private string $description;

	function __construct($name, $price, $description)
	{
		$this->name = $name;
		$this->price = $price;
		$this->description = $description;
	}

	public function getName()
	{
		return $this->name;
	}

	public function getValue()
	{
		return $this->price;
	}

	public function getDescription()
	{
		return $this->description;
	}
}

?>