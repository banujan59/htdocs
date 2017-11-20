<?php

	function signup(){
		$aClient = $this->model('Countries');
		$myCountries = $aClient->get();
		
		$this->view('Login/register',['countries'=>$myCountries]);

	}

?>