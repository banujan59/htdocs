<!DOCTYPE HTML>
<html>
	<head>
		<title>Shoe++ - Contact Us</title>
		<meta charset="utf-8"/>
		<link rel="icon" href="../resources/images/logo.png">
		
		<!-- Style sheets -->
		<link rel="stylesheet" href="../resources/css/bootstrap.min.css"/>
		<link rel="stylesheet" href="../resources/css/style.css"/>
		<link rel="stylesheet" href="../resources/css/contact.css"/>
		
		<!-- Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Josefin+Slab" rel="stylesheet"/>
		<link href="https://fonts.googleapis.com/css?family=Yantramanav" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
		
		<!-- Scripts -->
		<script src="../resources/js/jquery-1.10.2.min.js"></script>
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
					<h1 class="plusplusHeader">Contact Us</h1>
					<p class="plusplusText">
						<span style="font-size:45px;">S</span>hoe++ is an online store for the people. We understand
						the need to stay close to our customers. That is why it is possible for you to contact us 
						through the following:
					</p>
					
					<br/><br/>
					<h2 class="plusplusSubHeader">Social Media:</h2>
					<div class="socialMedias">
						<a target="_blank" href="http://www.facebook.com/"><img title="Facebook" src="../resources/images/fb.png"/></a>
						<a target="_blank" href="http://www.twitter.com/"><img title="Twitter" src="../resources/images/twitter.png"/></a>
						<a target="_blank" href="http://www.myspace.com/"><img title="My Space" src="../resources/images/myspace.jpg"/></a>
							<br/><br/>
						<a target="_blank" href="https://plus.google.com/discover"><img title="Google Plus" src="../resources/images/google-plus.png"/></a>
						<a target="_blank" href="https://www.snapchat.com/"><img title="Snapchat" src="../resources/images/snapchat.JPG"/></a>
						<a target="_blank" href="https://www.instagram.com/"><img title="Instagram" src="../resources/images/instagram.png"/></a>
					</div>
					
					<br/><br/><br/>
					<h2 class="plusplusSubHeader">Email:</h2>
					<form method="post" class="form-horizontal">
							<div class="form-group">
								<label class="control-label col-sm-2" for="email">Your Email:</label>
								<div class="col-sm-10">
									<input type="email" name="email" class="form-control" id="email" placeholder="Enter Email">
								</div>
							</div>
							
							<div class="form-group">
								<label class="control-label col-sm-2" for="pwd">Subject:</label>
								<div class="col-sm-10"> 
									<input type="text" name="subject" class="form-control" id="pwd" placeholder="Enter Password">
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