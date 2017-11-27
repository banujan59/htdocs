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
		$aClient = $this->model('Countries');
		$myCountries = $aClient->get();
		$this->view('Home/register', ['countries'=>$myCountries]);
	}
	
	public function about()
	{
		$this->view('Home/about');
	}
	
	public function contact()
	{
		$this->view('Home/contact');
	}
	
	public function logout()
	{
		LoginCore::logout();
		header('location:/home/index');
	}
}
?>