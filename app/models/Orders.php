<?php

class Orders extends Model
{
	public $ID;
	public $USER_ID;
	public $DATE;
	public $STATUS;

	public function __construct(){
		parent::__construct();
	}
	
	// mutator methods
	public function setID($value)
	{
		$this->ID = $value;
	}
	
	public function setUserID($value)
	{
		$this->USER_ID = $value;
	}
	
	public function setDate($value)
	{
		$this->DATE = $value;
	}
	
	public function setStatus($value)
	{
		$this->STATUS = $value;
	}
}

?>