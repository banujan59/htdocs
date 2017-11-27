<!DOCTYPE HTML>
<html>
	<head>
		<title>Shoe++ - Login</title>
		<meta charset="utf-8"/>
		<link rel="icon" href="images/logo.png">
		
		<!-- Style sheets -->
		<link rel="stylesheet" href="../resources/css/bootstrap.min.css"/>
		<link rel="stylesheet" href="../resources/css/style.css"/>
		<link rel="stylesheet" href="../resources/css/forms.css"/>
		
		<!-- Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Josefin+Slab" rel="stylesheet"/>
		<link href="https://fonts.googleapis.com/css?family=Yantramanav" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
		
		<!-- Scripts -->
		<script src="../resources/js/jquery-1.10.2.min.js"></script>
		<script src="../resources/js/login.js"></script>
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
				<script>
					$("nav").load("../resources/navbar.php");
				</script>
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
							<div class="formFooter"> 
								<button id="loginUserButton" type="submit" class="btn btn-default">Login</button>
									<br/><br/>
								<a href="">Forgot Password?</a> | <a href="register.php">Don't have an account?</a>
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