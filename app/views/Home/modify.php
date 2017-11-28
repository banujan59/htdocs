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
				<!--Fix the formatting, Banu! If you can, put in the appropriate placeholders.-->
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8">
						<header class="formHeader">
							<h1>Update/Change Information</h1>
						</header>
						<form method="post" class="form-horizontal">
							<div class="form-group">
								<label class="control-label col-sm-3" for="email">Email:</label>
								<div class="inputContainer col-sm-8">
									<input type="email" name="email" class="form-control" placeholder="Enter Email">
								</div>
								<span id="emailErrorMessage" class="control-label col-sm-2 errorMessage"></span>
							</div>
							
							<div class="form-group">
								<label class="control-label col-sm-3" for="pwd">New Password:</label>
								<div class="inputContainer col-sm-8"> 
									<input type="password" name="password" class="form-control" placeholder="Enter Password">
								</div>
								<span id="passwordErrorMessage" class="control-label col-sm-2 errorMessage"></span>
							</div>
							
							<div class="form-group">
								<label class="control-label col-sm-3" for="pwd">Confirm New Password:</label>
								<div class="inputContainer col-sm-8"> 
									<input type="password" name="confirmPassword" class="form-control" placeholder="Confirm Password">
								</div>
								<span id="confirmPasswordErrorMessage" class="control-label col-sm-2 errorMessage"></span>
							</div>
							
							<div class="form-group">
								<label class="control-label col-sm-3" for="pwd">Username:</label>
								<div class="inputContainer col-sm-8"> 
									<input type="text" name="uname" class="form-control" placeholder="Enter Username">
								</div>
								<span id="unameErrorMessage" class="control-label col-sm-2 errorMessage"></span>
							</div>
							
							<div class="form-group">
								<label class="control-label col-sm-3" for="pwd">First Name:</label>
								<div class="inputContainer col-sm-8"> 
									<input type="text" name="fname" class="form-control" placeholder="Enter Your First Name">
								</div>
								<span id="fnameErrorMessage" class="control-label col-sm-2 errorMessage"></span>
							</div>
							
							<div class="form-group">
								<label class="control-label col-sm-3" for="pwd">Last Name:</label>
								<div class="inputContainer col-sm-8"> 
									<input type="text" name="lname" class="form-control" placeholder="Enter Your Last Name">
								</div>
								<span id="lnameErrorMessage" class="control-label col-sm-2 errorMessage"></span>
							</div>
							
							<div class="form-group">
								<label class="control-label col-sm-3" for="pwd">Country:</label>
								<div class="inputContainer col-sm-8"> 
									<select class="form-control" name="country">
										<option>Select Your Country</option>
										<?php
											foreach ($data['countries'] as $country)
												echo "<option value='$country->ID'>".$country->COUNTRY_NAME."</option>";
										?>
									</select>
								</div>
								<span id="countryErrorMessage" class="control-label col-sm-2 errorMessage"></span>
							</div>
							
							<div class="form-group">
								<label class="control-label col-sm-3" for="pwd">Old Password:</label>
								<div class="inputContainer col-sm-8"> 
									<input type="password" name="password" class="form-control" placeholder="Enter Password">
								</div>
								<span id="passwordErrorMessage" class="control-label col-sm-2 errorMessage"></span>
							</div>
							
							<div class="form-group">
								<label class="control-label col-sm-3" for="pwd">Confirm Old Password:</label>
								<div class="inputContainer col-sm-8"> 
									<input type="password" name="confirmPassword" class="form-control" placeholder="Confirm Password">
								</div>
								<span id="confirmPasswordErrorMessage" class="control-label col-sm-2 errorMessage"></span>
							</div>
							
							<div class="form-group"> 
								<div class="control-label col-sm-8">
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