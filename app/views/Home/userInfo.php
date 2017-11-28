<!DOCTYPE HTML>
<html>
	<head>
		<title>Shoe++ - Register</title>
		<meta charset="utf-8"/>
		<link rel="icon" href="../resources/images/logo.png">
		
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
		<script src="../resources/js/register.js"></script>
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
							<h1>Your Information</h1>
						</header>
						<form method="post" class="form-horizontal">
							<div class="form-group">
								<label class="control-label col-sm-2" for="email">Your Email:</label>
								<div class="inputContainer col-sm-8">
									<label class="control-label col-sm-2" for="email">test</label>
								</div>
								<a href="/home/logout">Update Email</a>
							</div>
							
							<div class="form-group">
								<label class="control-label col-sm-2" for="pwd">Your Password:</label>
								<div class="inputContainer col-sm-8"> 
									<label class="control-label col-sm-2" for="pwd">****</label>
								</div>
								<a href="/home/logout">Change Password</a>
							</div>
							
							<div class="form-group">
								<label class="control-label col-sm-2" for="pwd">Your Username:</label>
								<div class="inputContainer col-sm-8"> 
									<label class="control-label col-sm-2" for="email">test</label>
								</div>
								<a href="/home/logout">Change Username</a>
							</div>
							
							<div class="form-group">
								<label class="control-label col-sm-2" for="pwd">Your First Name:</label>
								<div class="inputContainer col-sm-8"> 
									<label class="control-label col-sm-2" for="email">test</label>
								</div>
								<a href="/home/logout">Update First Name</a>
							</div>
							
							<div class="form-group">
								<label class="control-label col-sm-2" for="pwd">Your Last Name:</label>
								<div class="inputContainer col-sm-8"> 
									<label class="control-label col-sm-2" for="email">test</label>
								</div>
								<a href="/home/logout">Update Last Name</a>
							</div>
							
							<div class="form-group">
								<label class="control-label col-sm-2" for="pwd">Your Country:</label>
								<div class="inputContainer col-sm-8"> 
									<label class="control-label col-sm-2" for="email">test</label>
								</div>
								<a href="/home/logout">Update Country</a>
							</div>
							
							<div class="form-group"> 
								<div class="col-sm-offset-2 col-sm-10">
									<button id="registerUserButton" type="submit" class="btn btn-default">Register</button>
								</div>
							</div>
							
							<div class="form-group"> 
								<div class="col-sm-offset-2 col-sm-10">
									<span class="serverOutput">Section reserved for server errors.</span>
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