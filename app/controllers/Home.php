<?php
class Home extends Controller{
	public function index()
	{
		$this->view('Home/index');
	}
	
	public function login()
	{
		// a user who is logged in already, shouldn't access this page
		if( isset($_SESSION["uname"]) && $_SESSION["uname"] != null)
		{
			header('location:/home/index');
		}
		
		// if we have data form
		if( isset($_POST["email"]) && isset($_POST["password"]))
		{
			// if login successful
			if( loginCore::login($_POST["email"], $_POST["password"]) )
			{
				echo "login successful!";
			}
			
			// if login failed
			else
			{
				echo "login failed";
			}
		}
		
		// if we don't have data form
		else
		{
			$this->view('Home/login');
		}
		
	}

	public function register()
	{
		// a user who is logged in already, shouldn't access this page
		if( isset($_SESSION["uname"]) && $_SESSION["uname"] != null)
		{
			header('location:/home/index');
		}
		
		// check if we have form data
		if( isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["uname"]) && isset($_POST["fname"]) && isset($_POST["lname"]) && isset($_POST["countryID"]))
		{
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
			echo "user registered!";
		}
		
		// if we don't have from data
		else
		{
			$countries = $this->model('Countries');
			$myCountries = $countries->get();
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
	
	public function search($name)
	{
		// if name is not set
		if(!isset($name))
			header('location:/home/');
		
		// search for items
		$items = $this->model('Items');
		$queryResults = $items->where('NAME', 'LIKE', '%' . $name . "%");
		
		$this->view("Home/search", ["name" => $name, "items" => $queryResults] );
	}
		
	public function userInfo()
	{
		// a user who is logged in already, shouldn't access this page
		if( !isset($_SESSION["uname"]) || $_SESSION["uname"] == null)
		{
			header('location:/home/index');
		}
		
		$this->view('Home/userInfo');
	}
	
	public function modify()
	{
		$aClient = $this->model('Countries');
		$myCountries = $aClient->get();
		$this->view('Home/modify', ['countries'=>$myCountries]);
	}
	
	public function product($id)
	{
		// if we don't have the item id
		if(!isset($id))
			header('location:/home/');
		
		$this->view('Home/product');
	}
	
	public function logout()
	{
		LoginCore::logout();
		header('location:/home/');
	}
}
?>