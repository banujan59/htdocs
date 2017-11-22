<?php
class SPPLogin extends Controller{
	
	function index(){
		$this->view('index');
	}
	
	function loggingIn(){
		$this->view('login');
	}
	
	function registration(){
		$aClient = $this->model('Countries');
		$myCountries = $aClient->get();
		$this->view('register',['countries'=>$myCountries]);
	}
}
?>