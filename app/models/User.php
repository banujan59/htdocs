<?php

class User extends Model
{
	public $firstName;
	public $lastName;
	public $username;
	public $password;

	public function __construct(){
		parent::__construct();
	}



}

?>