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
		
		// if we have form data
		if( isset($_POST["operation"]) )
		{
			// if the user is not logged in, do not continue
			if( !isset($_SESSION["uname"]) || $_SESSION["uname"] == null)
			{
				echo "user not logged in";
			}
			
			// if the user is logged in, we can continue
			else
			{
				$order = $this->model("Orders");
				$orderDetails = $this->model("Order_Details");
				
				// if the operation is to remove from cart
				if($_POST["operation"] == "remove_from_cart")
				{
					$orderDetails->removeFromCart($id, $_SESSION["userID"]);
					echo "removed from cart";
				}
				
				else if($_POST["operation"] == "clear_cart")
				{
					$order->clearCart($_SESSION["userID"]);
					echo "cart cleared";
				}
				
				else if($_POST["operation"] == "pay")
				{
					// query object
					$orderQuery = $order->where("STATUS", "=", "CART")->where("USER_ID", "=", $_SESSION["userID"])->get();
					
					if( isset($orderQuery[0]) )
					{
						// re-create object
						$order = $this->model("Orders");
						$order->setID( $orderQuery[0]->ID );
						$order->setUserID( $orderQuery[0]->USER_ID );
						$order->setDate( $orderQuery[0]->DATE );
						$order->setStatus( "PURCHASED" );
						
						// update DB
						$order->update();
						echo "payed";
					}
					
					else
						echo "ERROR: Order not found!";
				}
				
				// if the operation is to add to cart
				else if($_POST["operation"] == "add_to_cart")
				{
					// update the date
					$today = getdate();
					$year = $today["year"];
					$month = $today["month"];
					$day = $today["mday"];
					$ymonth;
					
					switch($month)
					{
						case "January":
							$ymonth = 1;
						break;
						
						case "February":
							$ymonth = 2;
						break;
						
						case "March":
							$ymonth = 3;
						break;
						
						case "April":
							$ymonth = 4;
						break;
						
						case "May":
							$ymonth = 5;
						break;
						
						case "June":
							$ymonth = 6;
						break;
						
						case "July":
							$ymonth = 7;
						break;
						
						case "August":
							$ymonth = 8;
						break;
						
						case "September":
							$ymonth = 9;
						break;
						
						case "October":
							$ymonth = 10;
						break;
						
						case "November":
							$ymonth = 11;
						break;
						
						case "December":
							$ymonth = 12;
						break;
					}
					
					$fullDate = $year . '-' . $ymonth . '-' . $day;
					
					// check if an order record exists
					$orderQuery = $order->where('USER_ID', '=', $_SESSION["userID"])->where('STATUS', '=', 'CART')->get();
					
					// if there are no records
					if( !isset($orderQuery[0]) )
					{
						$order->setUserID( $_SESSION["userID"] );
						$order->setDate($fullDate);
						$order->setStatus("CART");
					
						// insert order
						$order->insert();
						// reset the query var
						$orderQuery = $order->where('USER_ID', '=', $_SESSION["userID"])->where('STATUS', '=', 'CART')->get();
					}
					
					// if there is a record
					else
					{
						$order->setID( $orderQuery[0]->ID );
						$order->setUserID( $_SESSION["userID"] );
						$order->setDate($fullDate);
						$order->setStatus("CART");
						
						// update the record
						$order->update();
					}
					
					// now the order details
					$item = $this->model("Items");
					$itemQuery = $item->where("ID", "=", $id)->get();
					
					$orderDetails->setOrderID( $orderQuery[0]->ID );
					$orderDetails->setItemID( $id );
					$orderDetails->setQuantity( 1 );
					$orderDetails->setUnitPrice( $itemQuery[0]->PRICE );
					
					// insert details
					$orderDetails->insert();
					
					
					echo "added to cart";
				}
				
				// if the operation is not recognized
				else
				{
					echo "Operation not recognized.";
				}
			}
		}
		
		// if we don't have form data
		else
		{
			// get product information
			$item = $this->model("Items");
			$itemQuery = $item->where('ID', '=', $id)->get();
		
			// get reviews for the item
			$review = $this->model("Reviews");
			$reviewQuery = $review->getAllReviews($id);
		
			// get status of the item for the current user
			$order = $this->model("Orders");
			$orderStatus = $order->getOrderStatus($id, $_SESSION["userID"]);
		
			$this->view('Home/product', ["items"=>$itemQuery, "reviews"=>$reviewQuery, "order_status"=>$orderStatus]);
		} // end else
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
	
	public function purchaseHistory()
	{
		// a user who is not logged in, shouldn't access this page
		if( !isset($_SESSION["uname"]) || $_SESSION["uname"] == null)
		{
			header('location:/home/index');
		}
		
		// get purchased items
		$item = $this->model("Items");
		$itemQuery = $item->getItemsPurchased($_SESSION["userID"]);
		
		$this->view("Home/purchaseHistory", ["items"=>$itemQuery]);
	}
	
	public function cart()
	{
		// a user who is not logged in, shouldn't access this page
		if( !isset($_SESSION["uname"]) || $_SESSION["uname"] == null)
		{
			header('location:/home/index');
		}
		
		$item = $this->model("Items");
		$itemQuery = $item->getItemsInCart($_SESSION["userID"]);
		
		$this->view("Home/cart", ["items"=>$itemQuery]);
		
		/* Jeremya's code
		// retrieve cart items
		// We need join cause for the below. Temporarily replaced with myItemsForSale logic.
		$orders = $this->model('Orders');
		$queryResults = $orders->where('USER_ID', '=', $_SESSION["userID"])->where('STATUS', 'LIKE', 'Open')->get();
		//$orderDetails = $this->model('Order_Details');
		//$queryResults1 = $orderDetails->where('ORDER_ID', '=', $queryResults[0]->ID)->get();
		$orderDetails = $this->model('Cart_Details');
		$queryResults1 = $orderDetails->get($queryResults[0]->ID);
		$this->view("Home/cart", ["items" => $queryResults1] );
		//$this->view("Home/cart");
		*/
	}
}
?>