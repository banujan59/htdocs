<?php
class Home extends Controller{
	public function index()
	{
		$this->view('Home/index');
	}
	
	public function login()
	{
		$this->view('Home/login');
	}

	public function register()
	{
		// check if we have form data
		if( isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["uname"]) && isset($_POST["fname"]) && isset($_POST["lname"]) && isset($_POST["countryID"]))
		{
			// store variables
			$email = $_POST["email"];
			$password = $_POST["email"];
			$uname = $_POST["uname"];
			$fname = $_POST["fname"];
			$lname = $_POST["lname"];
			$country = $_POST["country"];
			
			// hash the password
			$password = password_hash( $password, PASSWORD_BCRYPT );
			
			echo $password;
		}
		
		// if we don't have from data
		else
		{
			$aClient = $this->model('Countries');
			$myCountries = $aClient->get();
			$this->view('Home/register', ['countries'=>$myCountries]);
		}
	}
	
	public function about()
	{
		$this->view('Home/about');
	}
	
	public function contact()
	{
		$this->view('Home/contact');
	}
	
	public function product($id)
	{
		
	}
	
	public function logout()
	{
		LoginCore::logout();
		header('location:/home/index');
	}
}
?>