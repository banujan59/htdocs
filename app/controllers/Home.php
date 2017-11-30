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
		$queryResults = $items->where('NAME', 'LIKE', '%' . $name . "%")->get();
		
		$this->view("Home/search", ["name" => $name, "items" => $queryResults] );
	}
		
	public function userInfo()
	{
		// a user who is not logged in, shouldn't access this page
		if( !isset($_SESSION["uname"]) || $_SESSION["uname"] == null)
		{
			header('location:/home/index');
		}
		
		$this->view('Home/userInfo');
	}
	
	public function changePassword()
	{
		// a user who is not logged in, shouldn't access this page
		if( !isset($_SESSION["uname"]) || $_SESSION["uname"] == null)
		{
			header('location:/home/index');
		}
		
		// if we have form data
		if( isset($_POST["oldPwd"]) && isset($_POST["newPwd"]) )
		{
			$user = Controller::model('Users');
			$users = $user->where('email','=',$_SESSION["email"])->get();
			
			if( isset($users[0]) )
			{
				if(password_verify($_POST["oldPwd"], $users[0]->PASSWORD_HASH))
				{
					$user = $users[0];
					$user->setPasswordHash( password_hash( $_POST["newPwd"], PASSWORD_BCRYPT ) );
					$user->update();
					echo "success";
				}
				
				else
				{
					echo "current pwd invalid";
				}
			}
		}
		
		else // if we don't have form data
			$this->view('Home/changePassword');
	}
	
	public function modify()
	{
		// a user who is not logged in, shouldn't access this page
		if( !isset($_SESSION["uname"]) || $_SESSION["uname"] == null)
		{
			header('location:/home/index');
		}
		
		$aClient = $this->model('Countries');
		$myCountries = $aClient->get();
		$this->view('Home/modify', ['countries'=>$myCountries]);
	}
	
	public function product($id)
	{
		// if we don't have the item id
		if(!isset($id))
			header('location:/home/');
		
		// get product information
		$item = $this->model("Items");
		$itemQuery = $item->where('ID', '=', $id)->get();
		
		// get reviews for the item
		$review = $this->model("Reviews");
		$reviewQuery = $review->where('ITEM_ID', '=', $id)->get();
		
		$this->view('Home/product', ["items"=>$itemQuery, "reviews"=>$reviewQuery]);
	}
	
	public function logout()
	{
		LoginCore::logout();
		header('location:/home/');
	}
	
	// selling an item
	public function sellItem()
	{
		// a user who is not logged in, shouldn't access this page
		if( !isset($_SESSION["uname"]) || $_SESSION["uname"] == null)
		{
			header('location:/home/index');
		}
		
		// check for form data
		if( isset($_POST["name"]) && isset($_POST["description"]) && isset($_POST["price"]) && isset($_POST["images"]) )
		{
			// create class of type item 
			$item = $this->model("Items");
			
			// set attributes
			$item->setSellerID( $_SESSION["userID"] );
			$item->setName( $_POST["name"] );
			$item->setDescription( $_POST["description"] );
			$item->setPrice( $_POST["price"] );
			$item->setImageURL( $_POST["images"] );
			
			// insert
			$item->insert();
			
			echo "item saved!";
		}
		
		else // if we have no form data
		{
			$this->view("Home/sell_item");
		}
	}
	
	public function myItemsForSale()
	{
		// a user who is not logged in, shouldn't access this page
		if( !isset($_SESSION["uname"]) || $_SESSION["uname"] == null)
		{
			header('location:/home/index');
		}
		
		// if we have data form
		if( isset($_POST["itemIDToDelete"]) )
		{
			$item = $this->model("Items");
			$item->ID = $_POST["itemIDToDelete"];
			$item->delete();
			
			echo "Item deleted!";
		}
		
		else // if we don't have form data
		{
			// retrieve items on sale
			$items = $this->model('Items');
			$queryResults = $items->where('SELLER_ID', '=', $_SESSION["userID"])->get();
		
			$this->view("Home/myItemsForSale", ["items" => $queryResults] );
		}
	}
	
	public function cart()
	{
		// a user who is not logged in, shouldn't access this page
		if( !isset($_SESSION["uname"]) || $_SESSION["uname"] == null)
		{
			header('location:/home/index');
		}
		
		// retrieve cart items
		// We need join cause for the below. Temporarily replaced with myItemsForSale logic.
		$orders = $this->model('Orders');
		$queryResults = $orders->where('USER_ID', '=', $_SESSION["userID"])->where('STATUS', '=', 'like "Open"')->get();
		
		$this->view("Home/cart", ["items" => $queryResults] );
		//$this->view("Home/cart");
	}
}
?>