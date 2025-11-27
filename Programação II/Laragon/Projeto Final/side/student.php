<?php

include("database.php");

class Student
{
	private string $enrollment;
	private string $name;
	private string $passwordHash;
	private Course $course;
	private int $semester;

	function __construct(string $enrollment, string $name, string $crudePassword, Course $course = null, $semester)
	{
		$this->setEnrollment($enrollment);
		$this->setName($name);
		$this->setPasswordHash($crudePassword);
		$this->setCourse($course);
		$this->setSemester($semester);
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

	public function getSemester(): int
	{
		return $this->semester;
	}

	public function fetchStudent($conn)
	{
		$sql = "SELECT * FROM students";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		return $row;
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

	public function setCourse(Course $course): void
	{
		$this->course = $course;
	}

	public function setSemester(int $semester): void
	{
		$this->semester = $semester;
	}

	public function setPasswordHash(string $crudePassword): void
	{
		$this->passwordHash = password_hash($crudePassword, PASSWORD_DEFAULT);
	}

	public function isPasswordValid(string $password): bool
	{
		return password_verify($password, $this->passwordHash);
	}
}

?>