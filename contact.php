<!DOCTYPE HTML>
<html>
	<head>
		<title>Shoe++ - Login</title>
		<meta charset="utf-8"/>
		<link rel="icon" href="images/logo.png">
		
		<!-- Style sheets -->
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<link rel="stylesheet" href="css/style.css"/>
		<link rel="stylesheet" href="css/contact.css"/>
		
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
					<li><a href="login.php">Login</a></li>
					<li><a href="register.php">Register</a></li>
					<li><a href="about.php">About Us</a></li>
					<li><a style="text-decoration:underline;" href="contact.php">Contact Us</a></li>
				</ul>
			</nav>
			</div>
				<br/><br/><br/>
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8">
					<h1 class="plusplusHeader">Contact Us</h1>
					<p class="plusplusText">
						<span style="font-size:45px;">S</span>hoe++ is an online store for the people. We understand
						the need to stay close to our customers. That is why it is possible to contact us throught the
						following:
					</p>
					
					<br/><br/>
					<h2 class="plusplusSubHeader">Social Medias:</h2>
					<div class="socialMedias">
						<a target="_blank" href="http://www.facebook.com/"><img title="Facebook" src="images/fb.png"/></a>
						<a target="_blank" href="http://www.twitter.com/"><img title="Twitter" src="images/twitter.png"/></a>
						<a target="_blank" href="http://www.myspace.com/"><img title="My Space" src="images/myspace.jpg"/></a>
							<br/><br/>
						<a target="_blank" href="https://plus.google.com/discover"><img title="Google Plus" src="images/google-plus.png"/></a>
						<a target="_blank" href="https://www.snapchat.com/"><img title="Snapchat" src="images/snapchat.JPG"/></a>
						<a target="_blank" href="https://www.instagram.com/"><img title="Instagram" src="images/instagram.png"/></a>
					</div>
					
					<br/><br/><br/>
					<h2 class="plusplusSubHeader">Email:</h2>
					<form method="post" class="form-horizontal">
							<div class="form-group">
								<label class="control-label col-sm-2" for="email">Your Email:</label>
								<div class="col-sm-10">
									<input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
								</div>
							</div>
							
							<div class="form-group">
								<label class="control-label col-sm-2" for="pwd">Subject:</label>
								<div class="col-sm-10"> 
									<input type="text" name="subject" class="form-control" id="pwd" placeholder="Enter password">
								</div>
							</div>
							
							<div class="form-group">
								<label class="control-label col-sm-2" for="pwd">Message:</label>
								<div class="col-sm-10"> 
									<textarea style="resize:none;" class="form-control" name="message" rows="5" id="comment"></textarea>
								</div>
							</div>
							
							<div class="form-group"> 
								<div class="col-sm-offset-2 col-sm-10">
									<button id="sendEmailbutton" type="submit" class="btn btn-default">Send Email</button>
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