<?php

class Users extends Model
{
	public $ID;
	public $EMAIL;
	public $PASSWORD_HASH;
	public $UNAME;
	public $FNAME;
	public $LNAME;
	public $COUNTRY_ID;

	public function __construct(){
		parent::__construct();
	}
	
	// mutator methods
	public function setID($value)
	{
		$this->ID = $value;
	}
	
	public function setEmail($value)
	{
		$this->EMAIL = $value;
	}
	
	public function setPasswordHash($value)
	{
		$this->PASSWORD_HASH = $value;
	}
	
	public function setUname($value)
	{
		$this->UNAME = $value;
	}
	
	public function setFname($value)
	{
		$this->FNAME = $value;
	}
	
	public function setLname($value)
	{
		$this->LNAME = $value;
	}
	
	public function setCountryID($value)
	{
		$this->COUNTRY_ID = $value;
	}



}

?>