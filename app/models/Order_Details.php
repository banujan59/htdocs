<?php

class Order_Details extends Model
{
	public $ORDER_ID;
	public $ITEM_ID;
	public $QUANTITY;
	public $UNIT_PRICE;

	public function __construct(){
		parent::__construct();
	}
	
	// mutator methods
	public function setOrderID($value)
	{
		$this->ORDER_ID = $value;
	}
	
	public function setItemID($value)
	{
		$this->ITEM_ID = $value;
	}
	
	public function setQuantity($value)
	{
		$this->QUANTITY = $value;
	}
	
	public function setUnitPrice($value)
	{
		$this->UNIT_PRICE = $value;
	}
}

?>