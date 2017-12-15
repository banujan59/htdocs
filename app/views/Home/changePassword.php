<!DOCTYPE HTML>
<html>
	<head>
		<title>Shoe++ - Change Password</title>
		<meta charset="utf-8"/>
		<link rel="icon" href="/resources/images/logo.png">
		
		<!-- Style sheets -->
		<link rel="stylesheet" href="/resources/css/bootstrap.min.css"/>
		<link rel="stylesheet" href="/resources/css/style.css"/>
		<link rel="stylesheet" href="/resources/css/forms.css"/>
		<link rel="stylesheet" href="/resources/css/userInfo.css"/>
		
		<!-- Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Josefin+Slab" rel="stylesheet"/>
		<link href="https://fonts.googleapis.com/css?family=Yantramanav" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
		
		<!-- Scripts -->
		<script src="/resources/js/jquery-1.10.2.min.js"></script>
		<script src="/resources/js/changePassword.js"></script>
	</head>
	
	<body>
		<div class="topBar">
			<script>
				$(".topBar").load("/resources/topbar.php");
			</script>
		</div>
			
			<br/><br/><br/><br/><br/><br/><br/><br/>
		<div class="container">
			<div class="row">
			<nav>
				<script>
					$("nav").load("/resources/navbar.php");
				</script>
			</nav>
			</div>
				<br/><br/><br/>
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-5">
					<header class="formHeader">
							<h1>Change Your Password</h1>
						</header>
				</div> <!-- End col -->
			</div> <!-- End row -->
			<div class="row">
			<div class="col-md-2"></div>
				<div class="col-md-8">
						<!--Please make the SECOND control label of each group left-aligned (if that would make it look better).-->
						<form method="post" class="form-horizontal">
						<div class="form-group">
								<label class="control-label col-sm-3" for="email">Current Password:</label>
								<div class="inputContainer col-sm-8">
									<input type="password" name="oldPwd" class="form-control" placeholder="Enter Current Password">
								</div>
								<span id="oldPasswordErrorMessages" class="control-label col-sm-2 errorMessage"></span>
							</div>
							
							<div class="form-group">
								<label class="control-label col-sm-3" for="pwd">New Password:</label>
								<div class="inputContainer col-sm-8"> 
									<input type="password" name="newPwd" class="form-control" placeholder="Enter Password">
								</div>
								<span id="newPasswordErrorMessage" class="control-label col-sm-2 errorMessage"></span>
							</div>
							
							<div class="form-group">
								<label class="control-label col-sm-3" for="pwd">Confirm New Password:</label>
								<div class="inputContainer col-sm-8"> 
									<input type="password" name="confirmNewPwd" class="form-control" placeholder="Confirm Password">
								</div>
								<span id="confirmNewPasswordErrorMessage" class="control-label col-sm-2 errorMessage"></span>
							</div>
							
							<div class="form-group"> 
								<div class="control-label col-sm-8">
									<button id="changePwdButton" type="submit" class="btn btn-default">Change Password</button>
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