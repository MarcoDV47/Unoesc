<?php

class Client
{
	private string $enrollment;
	private string $name;
	private string $passwordHash;
	private Course $course;

	function __construct(string $enrollment, string $name, string $crudePassword)
	{
		$this->setEnrollment($enrollment);
		$this->setName($name);
		$this->setPasswordHash($crudePassword);
	}

	//Getters

	public function getEnrollment(): string
	{
		return $this->enrollment;
	}

	public function getName(): string
	{
		return $this->name;
	}	

	public function getPasswordHash(): string
	{
		return $this->passwordHash;
	}

	//Setters

	public function setEnrollment(string $enrollment): void
	{
		$this->enrollment = $enrollment;
	}

	public function setName(string $name) : void
	{
		$this->name = $name;
	}

	public function setPasswordHash(string $crudePassword): void
	{
		$this->passwordHash = password_hash($crudePassword, PASSWORD_DEFAULT);
	}

	public function validatePassword(string $password): bool
	{
		return password_verify($password, $this->passwordHash);
	}
}

?>