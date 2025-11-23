<?php

class Address
{
	private string $block;
	private int $roomNumber;
	private int $roomFloor;

	function __construct(string $block, int $roomNumber, int $roomFloor)
	{
		$this->setBlock($block);
		$this->setRoomNumber($roomNumber);
		$this->setRoomFloor($roomFloor);
	}

	//Getters
	public function getBlock(): string
	{
		return $this->block;
	}

	public function getRoomNumber(): int
	{
		return $this->roomNumber;
	}

	public function getRoomFloor(): int
	{
		return $this->roomFloor;
	}

	//Setters
	public function setBlock(string $block): void
	{
		if(strlen($block) !== 1)
			{
				throw new InvalidArgumentException("Bloco só pode receber um caracter.");
			}
		if(!preg_match('/^[a-zA-Z]+$/',$block))
			{
				throw new InvalidArgumentException("Bloco só pode receber letras (A-Z ou a-z).");
			}
		$m = strtoupper($block);
		$this->block = $m;	

	}
	public function setRoomNumber(int $roomNumber): void
	{
		if($roomNumber <= 0)
			{
				throw new InvalidArgumentException("Número da Sala deve ser maior que 0.");
			}
		$this->roomNumber = $roomNumber;
	}
	public function setRoomFloor(int $roomFloor): void
	{
		$this->roomFloor = $roomFloor;
	}
}

?>