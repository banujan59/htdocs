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
	
	
	public function getOrderStatus($itemID, $userID)
	{	
		$select	= "SELECT status FROM orders, order_details WHERE orders.ID = order_details.ORDER_ID AND order_details.ITEM_ID = $itemID AND orders.USER_ID = $userID";
        $stmt = self::$_connection->prepare($select);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, $this->_className);
        $returnVal = [];
        while($rec = $stmt->fetch()){
            $returnVal[] = $rec;
        }
        return $returnVal;
	}
	
	public function clearCart($userID)
	{
		$delete = "DELETE FROM order_details WHERE order_details.ORDER_ID = (select orders.ID FROM orders WHERE orders.STATUS = 'CART' AND USER_ID = $userID)";
        $stmt = self::$_connection->prepare($delete);
        $stmt->execute(array($this->_PKName=>$this->{$this->_PKName}));
		
		$delete = "DELETE FROM orders WHERE STATUS = 'CART' AND USER_ID = $userID";
        $stmt = self::$_connection->prepare($delete);
        $stmt->execute(array($this->_PKName=>$this->{$this->_PKName}));
	}
}

?>