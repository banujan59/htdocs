<?php
class LoginCore{
	public static function login($email, $password)
	{
		$user = Controller::model('Users');
		$users = $user->where('email','=',$email)->get();
		
		if(isset($users[0]))
		{
			if(password_verify($password, $users[0]->PASSWORD_HASH))
			{
				// set the session variables
				$_SESSION['email'] = $email;
				$_SESSION['userID'] = $users[0]->ID;
				$_SESSION["uname"] = $users[0]->UNAME;
				$_SESSION["fname"] = $users[0]->FNAME;
				$_SESSION["lname"] = $users[0]->LNAME;
				
				// get user country info
				$country = Controller::model('Countries');
				$countryQuery = $country->where('ID', '=', $users[0]->COUNTRY_ID)->get();
				
				if(isset($countryQuery[0]))
				{
					$_SESSION["COUNTRY_NAME"] = $countryQuery[0]->COUNTRY_NAME;
					$_SESSION["EXCHANGE_RATE"] = $countryQuery[0]->EXCHANGE_RATE;
					$_SESSION["COUNTRY_CODE"] = $countryQuery[0]->COUNTRY_CODE;
				}
				
				return true;
			}
		}
		
		// if function reaches this point, the login has failed
		return false;
	}
	
	public static function isLoggedIn(){
		return isset($_SESSION['uname']);
	}
	
	public static function logout()
	{
		unset($_SESSION['email']);
		unset($_SESSION['userID']);
		unset($_SESSION["uname"]);
		unset($_SESSION["fname"]);
		unset($_SESSION["lname"]);
	}
}
?>