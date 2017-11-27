<?php
class Home extends Controller{
	public function index()
	{
		$this->view('Home/index');
	}
	
	public function login()
	{
		if( isset($_POST["email"]) && isset($_POST["password"]))
		{
			loginCore::login($_POST["email"], $_POST["password"]);
		}
		else
		{
			$this->view('Home/login');
		}
	}

	public function register()
	{
		// check if we have form data
		if( isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["uname"]) && isset($_POST["fname"]) && isset($_POST["lname"]) && isset($_POST["countryID"]))
		{
<<<<<<< HEAD
			// store variables
			$email = $_POST["email"];
			$password = $_POST["password"];
			$uname = $_POST["uname"];
			$fname = $_POST["fname"];
			$lname = $_POST["lname"];
			$country = $_POST["country"];
			
			// hash the password
			$password = password_hash( $password, PASSWORD_BCRYPT );
			
			echo $password;
=======
			// create model of user 
			$user = $this->model('Users');
			
			// store variables
			$user->setEmail( $_POST["email"] );
			$user->setPasswordHash( password_hash( $_POST["password"], PASSWORD_BCRYPT ) );
			$user->setUname( $_POST["uname"] );
			$user->setFname( $_POST["fname"] );
			$user->setLname( $_POST["lname"] );
			$user->setCountryID( $_POST["countryID"] );
			
			// register user 
			$user->insert();
			
			// echo success message
			echo "user registed!";
>>>>>>> Banu's-branch
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