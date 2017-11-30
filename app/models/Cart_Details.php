<?php

class Order_Details extends Model
{
	public $ORDER_ID;
	public $ITEM_Name;
	public $Seller_Name;
	public $QUANTITY;
	public $UNIT_PRICE;

	public function __construct(){
		parent::__construct();
	}


	//run select statements
    public function get($orderId){
		$select	= "SELECT * FROM Order_Details, Items, Users WHERE Order_Details.ITEM_ID = Items.ID AND Users.ID = Items.SELLER_ID AND ORDER_ID = :ORDER_ID";
        $stmt = self::$_connection->prepare($select);
        $stmt->execute(array('ORDER_ID' => $orderId));
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Order_Details');
        $returnVal = [];
        while($rec = $stmt->fetch()){
            $returnVal[] = $rec;
        }
        return $returnVal;
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