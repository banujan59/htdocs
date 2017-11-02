<?php
class Login extends Controller{
	public function index(){
		$user = $this->model('User');
		if(isset($_POST['action']) && $_POST['action'] == 'Login'){
			$username = $_POST['username'];
			$password = $_POST['password'];
			LoginCore::login($username, $password);
			header('location:/Clients/');
		}else
			$this->view('Login/index');
	}


	public function signup(){
		$user = $this->model('User');
		if(isset($_POST['action'])){
			$user->firstName = $_POST['firstName'];
			$user->lastName = $_POST['lastName'];
			$user->username = $_POST['username'];
			$user->password = password_hash($_POST['password'],PASSWORD_DEFAULT);
			$user->insert();

			
			header('location:/Login');
		}else
			$this->view('Login/signup');
	}

	
	public function logout(){
		LoginCore::logout();
		header('location:/Login');
	}
}
?>