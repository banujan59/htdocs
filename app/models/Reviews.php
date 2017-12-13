<?php

class Reviews extends Model
{
	public $WRITER_ID;
	public $ITEM_ID;
	public $RATING;
	public $CONTENT;
	public $TYPE;

	public function __construct(){
		parent::__construct();
	}
	
	// mutator methods
	public function setWriterID($value)
	{
		$this->WRITER_ID = $value;
	}
	
	public function setItemID($value)
	{
		$this->ITEM_ID = $value;
	}
	
	public function setRating($value)
	{
		$this->RATING = $value;
	}
	
	public function setContent($value)
	{
		$this->CONTENT = $value;
	}
	
	public function setType($value)
	{
		$this->TYPE = $value;
	}
	
	public function getAllReviews($itemID)
	{
		$select	= "SELECT users.FNAME AS writer_fname, users.LNAME AS writer_lname, reviews.* FROM users, reviews WHERE reviews.WRITER_ID = users.ID AND reviews.ITEM_ID = $itemID;";
        $stmt = self::$_connection->prepare($select);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, $this->_className);
        $returnVal = [];
        while($rec = $stmt->fetch()){
            $returnVal[] = $rec;
        }
        return $returnVal;
	}
	
	public function deleteReviewFromUser($userID, $itemID)
	{
		$delete = "DELETE FROM reviews WHERE WRITER_ID = $userID AND ITEM_ID = $itemID";
        $stmt = self::$_connection->prepare($delete);
        $stmt->execute();
	}
	
	public function updateUserReview($rating, $content, $type, $writerID, $itemID)
	{
		/*
		UPDATE reviews SET reviews.RATING = $this->RATING, reviews.CONTENT = $this->CONTENT, reviews.TYPE = $this->TYPE WHERE reviews.WRITER_ID = $this->WRITER_ID AND reviews.ITEM_ID = $this->ITEM_ID;
		*/ 
		$update = 'UPDATE reviews SET RATING = ' . $rating . ', CONTENT = \'' . $content . '\', TYPE = \'' . $type . '\' WHERE WRITER_ID = ' . $writerID . ' AND ITEM_ID = ' . $itemID;
		$stmt = self::$_connection->prepare($update);
        $stmt->execute();
	}
}

?>