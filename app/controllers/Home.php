<?php
class Home extends Controller{
	public function index()
	{
		$this->view('Home/index');
	}

	public function register()
	{
		$this->view('Home/register');
	}
	
	public function about()
	{
		$this->view('Home/about');
	}
	
	public function contact()
	{
		$this->view('Home/contact');
	}

	
	public function logout(){
		LoginCore::logout();
		header('location:/home/index');
	}
}
?>