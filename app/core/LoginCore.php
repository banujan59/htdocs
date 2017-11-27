<?php
class LoginCore{
	public static function login($email, $password){
		$user = Controller::model('Users');
		$users = $user->where('email','=',$email)->get();
		echo $email;
		if(isset($users[0])){
			if(password_verify($password, $users[0]->PASSWORD_HASH)){
				$_SESSION['email'] = $email;
				$_SESSION['userID'] = $users[0]->ID;
				$_SESSION['pwdt'] = $users[0]->PASSWORD_HASH;
				echo $_SESSION['userID'];
			}
			echo $_SESSION['pwdt'];
		}
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