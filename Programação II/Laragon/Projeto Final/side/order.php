<?php

class Order
{
	private array $shopCart = [];
	private float $total = 0;
	private string $answer = "yes";
	private Student $student;
	private Address $address;
	private bool $isDelivered = false;

	function __construct(Student $student, Address $address)
	{
		$this->setStudent($student);
		if (!isset($address)) {
			$this->setAddress(getDefaultAddress());
		}
		else $this->setAddress($address);
	}

	//Getters
	public function getTotal(): float
	{
		foreach($this->shopCart as $product)
		{
			$this->total += $product->getPrice();
		}
		return $this->total;
	}

	public function getStudent(): Student
	{
		return $this->student;
	}

	public function getAnswer(): string
	{
		return $this->answer;
	}

	public function getAddress(): Address
	{
		return $this->address;
	}

	public function getIsDelivered() : bool
	{
		return $this->isDelivered;
	}

	public function getDefaultAddress() : Address
	{
			$weekDay = date('w');
			$student = $this->getStudent();
			$studentCourse = $student->getCourse();
			$studentSemester = $student->getSemester();
			$studentClass = $studentCourse->getSpecificClass($studentSemester, $weekDay);
			return $studentClass->getAddress();
	}

	//Setters
	public function setStudent(Student $student): void
	{
		$this->student = $student;
	}

	public function setAddress(Address $address): void
	{
		$this->address = $address;
	}

	public function setIsDelivered(bool $isDelivered): void
	{
		$this->isDelivered = $isDelivered;
	}

	//Funcoes Proprias

	public function addItem($product) : void
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

	public function getShoppingCart() : array
	{
		return $this->shopCart;
	}

	public function addMultipleItems($product, $quantity) : void
	{
		for ($i = 0; $i < $quantity; $i++)
		{
			$this->addItem($product);
		}
	}
}

?>