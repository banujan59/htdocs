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
}

?>