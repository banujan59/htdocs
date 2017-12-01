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
	
	
	public function removeFromCart($itemID, $userID)
	{
		/*DELETE 
FROM order_details
WHERE order_details.ITEM_ID = 5
	AND order_details.ORDER_ID = (SELECT orders.ID FROM orders WHERE orders.USER_ID = 1);
	*/
		$delete = "DELETE FROM order_details WHERE order_details.ITEM_ID = $itemID AND order_details.ORDER_ID = (SELECT orders.ID FROM orders WHERE orders.USER_ID = $userID)";
        $stmt = self::$_connection->prepare($delete);
        $stmt->execute();
	}
}

?>