<?php
class SPPLogin extends Controller{
	
	
	
	function index(){
		$aClient = $this->model('Countries');
		$myCountries = $aClient->get();
		$this->view('register',['countries'=>$myCountries]);

	}
}
?>