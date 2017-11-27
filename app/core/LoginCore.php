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
				$_SESSION['email'] = $email;
				$_SESSION['userID'] = $users[0]->ID;
				return true;
			}
		}
		
		// if function reaches this point, the login has failed
		return false;
	}
	
	public static function isLoggedIn(){
		return isset($_SESSION['uname']);
	}
	
	public static function logout(){
		unset($_SESSION['uname']);
		unset($_SESSION['userID']);
	}
}
?>