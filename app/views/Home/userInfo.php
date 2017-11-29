<!DOCTYPE HTML>
<html>
	<head>
		<title>Shoe++ - Register</title>
		<meta charset="utf-8"/>
		<link rel="icon" href="../resources/images/logo.png">
		
		<!-- Style sheets -->
		<link rel="stylesheet" href="../resources/css/bootstrap.min.css"/>
		<link rel="stylesheet" href="../resources/css/style.css"/>
		<link rel="stylesheet" href="/resources/css/userInfo.css"/>
		
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
			<script>
				$(".topBar").load("../resources/topbar.php");
			</script>
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
				<div class="col-md-5">
					<header class="formHeader">
							<h1>Your Information</h1>
						</header>
				</div> <!-- End col -->
			</div> <!-- End row -->
			<div class="row">
				<div class="col-md-4"></div>
				<div class="col-md-8">
						<!--Please make the SECOND control label of each group left-aligned (if that would make it look better).-->
						<form method="post" class="form-horizontal">
							<div class="form-group">
								<label class="control-label col-sm-3" for="email">Your Email:</label>
									<label class="userInfo control-label col-sm-4"><?php echo $_SESSION['email'];?></label>
							</div>
							
							<div class="form-group">
								<label class="control-label col-sm-3" for="pwd">Your Password:</label>
									<label class="userInfo control-label col-sm-4"><a href="/home/changePassword/">Change Password</a></label>
							</div>
							
							<div class="form-group">
								<label class="control-label col-sm-3" for="pwd">Your Username:</label>
									<label class="userInfo control-label col-sm-4"><?php echo $_SESSION['uname'];?></label>
							</div>
							
							<div class="form-group">
								<label class="control-label col-sm-3" for="pwd">Your First Name:</label>
									<label class="userInfo control-label col-sm-4"><?php echo $_SESSION['fname'];?></label>
							</div>
							
							<div class="form-group">
								<label class="control-label col-sm-3" for="pwd">Your Last Name:</label>
									<label class="userInfo control-label col-sm-4"><?php echo $_SESSION['lname'];?></label>
							</div>
							
							<div class="form-group">
								<label class="control-label col-sm-3" for="pwd">Your Country:</label>
									<label class="userInfo control-label col-sm-4"><?php echo $_SESSION['COUNTRY_NAME'];?></label>
							</div>
							<br/>
							<div class="form-group">
								<div class="col-md-1"></div>
								<div class="col-md-4">
									<button id="updateProfileButton" type="button" class="btn btn-warning" onClick="location='/home/modify';">Update Profile</button>
										<br/><br/>
									<button id="sellItemButton" type="button" class="btn btn-warning" onClick="location='/home/sellItem';">Sell an item</button>
									<br/><br/>
									<button id="viewCart" type="button" class="btn btn-warning" onClick="location='/home/cart';">View My Cart</button>
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