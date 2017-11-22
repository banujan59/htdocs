<?php
class SPPLogin extends Controller{
	
	function index(){
		$this->view('index');
		if(isset($_POST['action']) && $_POST['action'] == 'Login'){
			$this->view('login');
			/*$username = $_POST['username'];
			$password = $_POST['password'];
			LoginCore::login($username, $password);
			header('location:/Clients/');*/
		}else
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