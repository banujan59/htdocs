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
						<!--Please make the SECOND control label of each group left-aligned (if that would make it look better).-->
						<form method="post" class="form-horizontal">
							<div class="form-group">
								<label class="control-label col-sm-3" for="email">Your Email:</label>
									<label class="control-label col-sm-4" for="email">sirsweatsalot@gmail.com</label>
								<a class="control-label col-sm-4" href="/home/modify">Update Email</a>
							</div>
							
							<div class="form-group">
								<label class="control-label col-sm-3" for="pwd">Your Password:</label>
									<label class="control-label col-sm-4" for="pwd">************</label>
								<a class="control-label col-sm-4" href="/home/modify">Change Password</a>
							</div>
							
							<div class="form-group">
								<label class="control-label col-sm-3" for="pwd">Your Username:</label>
									<label class="control-label col-sm-4" for="email">gobbs</label>
								<a class="control-label col-sm-4" href="/home/modify">Change Username</a>
							</div>
							
							<div class="form-group">
								<label class="control-label col-sm-3" for="pwd">Your First Name:</label>
									<label class="control-label col-sm-4" for="email">Austin</label>
								<a class="control-label col-sm-4" href="/home/modify">Update First Name</a>
							</div>
							
							<div class="form-group">
								<label class="control-label col-sm-3" for="pwd">Your Last Name:</label>
									<label class="control-label col-sm-4" for="email">Gobby</label>
								<a class="control-label col-sm-4" href="/home/modify">Update Last Name</a>
							</div>
							
							<div class="form-group">
								<label class="control-label col-sm-3" for="pwd">Your Country:</label>
									<label class="control-label col-sm-4" for="email">United States</label>
								<a class="control-label col-sm-4" href="/home/modify">Update Country</a>
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