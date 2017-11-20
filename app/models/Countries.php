<?php

class Client extends Model{
	public $country_code;
	public $country_name;
	public $exchange_rate;

	public function __construct(){
		parent::__construct();
	}
	
	function isValid(){
		return ($this->firstName!='' && $this->country != '');
	}
}
?>