<?php

class Course
{
	private string $name;
	private $classes = [ [], [], [], [], [], [], [], [] ];

	function __construct(string $name)
	{
		$this->setName($name);
	}

	//Getters
	public function getName(): string
	{
		return $this->name;
	}	

	//Setters
	public function setName(string $newName): void
	{
		$this->name = $newName;
	}	

	public function getTotalClassesNumber(): int
	{
		$total = 0;
		for($i = 0; $i < count($this->classes); $i++)
		{
			for($j = 0; $j < count($this->classes[$i]); $j++)
			{
				$total++;		
			}
		}
		return $total; 
	}

	public function getTotalClasses(): array
	{
		return $this->classes;
	}

	public function getSemesterClasses(int $semesterNumber): array
	{
		return $this->classes[$semesterNumber];
	}

	public function getSpecificClass(int $semesterNumber, int $dayOfWeek): Subject
	{
		return $this->classes[$semesterNumber][$dayOfWeek];
	}

	public function addClass(int $semesterNumber, $subject): void
	{
		if(is_array($subject))
		{
			for($i = 0; $i < count($subject); $i++)
			{
				$this->addClass($semesterNumber, $subject[$i]);	
			}
		}
		else array_push($this->classes[$semesterNumber], $subject);
	}

	public function addAllClasses(array $subjects): void
	{
		for($i = 0; $i < count($this->classes); $i++)
		{
			for($j = 0; $j < count($subjects[$i]); $j++)
			{
				$this->addClass($i, $subjects[$i][$j]);	
			}
		}
	}
}
?>