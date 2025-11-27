<?php

class Order
{
	private array $items = [];
	private float $total = 0;
	private Student $student;
	private Address $address;
	private string $date;
	private bool $isDelivered = false;

	function __construct(Store $store, Student $student, Address $address, array $products = [], array $quantities = [])
	{
		$this->setStudent($student);
		$today = date('d/m/Y');
		$this->setDate($today);

		if (!isset($address)) {
			$this->setAddress(getDefaultAddress());
		}
		else $this->setAddress($address);
		$store->addOrder($this);
	}

	//Getters
	public function getTotal(): float
	{
		$this->total = 0;

		foreach($this->items as $item)
		{
			$product = $item->getProduct();
			$quantity = $item->getQuantity();

			$this->total += ($product->getPrice() * $quantity);
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

	public function getDate(): string
	{
		return $this->date;
	}

	public function getIsDelivered() : bool
	{
		return $this->isDelivered;
	}

	public function getItems() : array
	{
		return $this->items;
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

	public function setDate(string $date): void
	{
		$this->date = $date;
	}

	public function setIsDelivered(bool $isDelivered): void
	{
		$this->isDelivered = $isDelivered;
	}

	//Funcoes Proprias

	//Add Individual
	public function addItem(Product $newProduct, int $quantity = 1): void {

    foreach($this->items as $item) {
        if ($item->getProduct() === $newProduct) {
            
            $currentQuantity = $item->getQuantity();
            $item->setQuantity($currentQuantity + $quantity);
            return;
        }
    }
		$newItem = new Item($newProduct, $quantity);
		$this->items[] = $newItem;
	}

	//Add Array
	public function addItems(array $products = [], array $quantities = []): void { 

    	if(count($products) === count($quantities)) {

        	for($i = 0; $i < count($products); $i++) {
            	$product = $products[$i];
            	$quantity = $quantities[$i];

           		if ($product instanceof Product && $quantity > 0) { 
                
                	$this->addItem($product, $quantity); 

            	} else {
                	error_log("Produto ou Quantidade inválida detectada.");
            	}
        	}

    	} else {

        error_log("O número de produtos informados não confere com o número de quantidades informadas.");
    	}
	}
}

?>