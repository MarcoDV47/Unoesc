<?php

class Client
{
	private string $name;
	private string $enrollment;
	private Address $address;

	function __construct($name, $enrollment, $address)
	{
		$this->name = $name;
		$this->enrollment = $enrollment;
		$this->address = $address;
	}
	
	public function getName()
	{
		return $this->name;
	}	

	public function getEnrollment()
	{
		return $this->enrollment;
	}

	public function getAddress()
	{
		return $this->address;
	}
}

?>