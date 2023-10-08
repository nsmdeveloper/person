<?php
namespace Natsanmel\Classes;
class Person {
	
	private string $fname = "";
	private string $lname = "";
	private string $dbirth = "";

	public function setFname($fname) 
	{
		$this->fname = $fname;
	}

	public function setLname($lname) 
	{
		$this->lname = $lname;
	}

	public function setDbirth($dbirth)
	{
		$this->dbirth = $dbirth;
	}

	public function getFname() : string
	{
		return $this->fname;
	}

	public function getLname() : string
	{
		return $this->lname;
	}


	public function getDbirth() : string
	{
		return $this->dbirth;
	}

}