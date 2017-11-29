<?php

class Items extends Model
{
	public $ID;
	public $SELLER_ID;
	public $NAME;
	public $DESCRIPTION;
	public $PRICE;
	public $imageURL;

	public function __construct(){
		parent::__construct();
	}
	
	// mutator methods
	public function setSellerID($value)
	{
		$this->SELLER_ID = $value;
	}
	
	public function setName($value)
	{
		$this->NAME = $value;
	}
	
	public function setDescription($value)
	{
		$this->DESCRIPTION = $value;
	}
	
	public function setPrice($value)
	{
		$this->PRICE = $value;
	}
	
	public function setImageURL($value)
	{
		$this->imageURL = $value;
	}
}

?>