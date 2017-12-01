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
	
	public function getItemsInCart($userID)
	{
		/*
		
		SELECT items.*, users.FNAME AS 'seller_fname', users.LNAME AS 'seller_lname'
FROM  items, users
WHERE items.SELLER_ID = users.ID AND
	items.ID IN (SELECT order_details.ITEM_ID 
                 FROM order_details, orders
                 WHERE order_details.ORDER_ID = orders.ID
                 AND orders.STATUS = 'CART'
                 AND orders.USER_ID = 1);
		*/
		$select	= "SELECT items.*, users.FNAME AS 'seller_fname', users.LNAME AS 'seller_lname' FROM  items, users WHERE items.SELLER_ID = users.ID AND items.ID IN (SELECT order_details.ITEM_ID  FROM order_details, orders WHERE order_details.ORDER_ID = orders.ID AND orders.STATUS = 'CART' AND orders.USER_ID = $userID)";
        $stmt = self::$_connection->prepare($select);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, $this->_className);
        $returnVal = [];
        while($rec = $stmt->fetch()){
            $returnVal[] = $rec;
        }
        return $returnVal;
	}
}

?>