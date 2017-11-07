<!DOCTYPE HTML>
<html>
	<head>
		<title>Shoe++ - Login</title>
		<meta charset="utf-8"/>
		<link rel="icon" href="images/logo.png">
		
		<!-- Style sheets -->
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<link rel="stylesheet" href="css/style.css"/>
		<link rel="stylesheet" href="css/forms.css"/>
		
		<!-- Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Josefin+Slab" rel="stylesheet"/>
		<link href="https://fonts.googleapis.com/css?family=Yantramanav" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
		
		<!-- Scripts -->
		<script src="js/jquery-1.10.2.min.js"></script>
		<script src="js/login.js"></script>
	</head>
	
	<body>
		<div class="topBar">
			<div class="logo">Shoe++</div>
			<div class="container">
				<div class="row">
					<form>
						<input type="text" placeholder="Search Shoe++">
					</form>
				</div>
			</div>
		</div>
			
			<br/><br/><br/><br/><br/><br/><br/><br/>
		<div class="container">
			<div class="row">
			<nav>
				<ul>
					<li><a style="text-decoration:underline;" href="login.php">Login</a></li>
					<li><a href="register.php">Register</a></li>
					<li><a href="about.php">About Us</a></li>
					<li><a href="contact.php">Contact Us</a></li>
				</ul>
			</nav>
			</div>
				<br/><br/><br/>
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8">
					<header class="formHeader">
						<h1>Login</h1>
					</header>
						<form method="post" class="form-horizontal">
							<div class="form-group">
								<label class="control-label col-sm-2" for="email">Email:</label>
								<div class="col-sm-10">
									<input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-2" for="pwd">Password:</label>
								<div class="col-sm-10"> 
									<input type="password" name="password" class="form-control" id="pwd" placeholder="Enter password">
								</div>
							</div>
							<div class="form-group"> 
								<div class="col-sm-offset-2 col-sm-10">
									<div class="checkbox">
										<label><input type="checkbox"> Remember me</label>
									</div>
								</div>
							</div>
							<div class="form-group"> 
								<div class="col-sm-offset-2 col-sm-10">
									<button type="submit" class="btn btn-default">Login</button>
									<button id="registerButton" class="btn btn-default">Don't Have an Account?</button>
								</div>
							</div>
						</form>
				</div> <!-- End col -->
			</div> <!-- End row -->
			

			<hr/>

			<footer>
				<p>&copy; Shoe++ 2017</p>
			</footer>

		</div><!--/.container-->

	</body>
</html>