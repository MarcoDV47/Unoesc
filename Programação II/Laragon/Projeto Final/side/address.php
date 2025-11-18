<?php

class Address
{
	private string $block;
	private int $roomNumber;
	private int $roomFloor;

	function __construct($block, $roomNumber, $roomFloor)
	{
		$this->block = $block;
		$this->roomNumber = $roomNumber;
		$this->roomFloor = $roomFloor;
	}

	public function getRoomNumber()
	{
		return $this->roomNumber;
	}	
}

?>