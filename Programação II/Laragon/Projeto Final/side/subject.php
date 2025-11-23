<?php

class Subject
{
	private string $name;
	private Address $address;

	function __construct(string $name, Address $address)
	{
		$this->setName($name);
		$this->setAddress($address);
	}

	public function getName(): string
	{
		return $this->name;
	}
	
	public function getAddress(): Address
	{
		return $this->address;
	}

	public function setName(string $name) : void
	{
		$this->name = $name;
	}

	public function setAddress(Address $address): void
	{
		$this->address = $address;
	}
}

?>