<?php 
	session_start();
	// if the user is logged in...
	if( isset($_SESSION["uname"]) && $_SESSION["uname"] != null)
	{
		?>
			<p>TODO</p>
		<?php
	}
	
	// if the user is not logged in
	else
	{
		?>
			<ul>
				<li><a href="/home/">Home</a></li>
				<li><a href="/home/login">Login</a></li>
				<li><a href="/home/register">Register</a></li>
				<li><a href="/home/about">About Us</a></li>
				<li><a href="/home/contact">Contact Us</a></li>
			</ul>
		<?php
	}
?>