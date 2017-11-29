<!DOCTYPE HTML>
<html>
	<head>
		<title>Shoe++ - Sell an Item</title>
		<meta charset="utf-8"/>
		<link rel="icon" href="/resources/images/logo.png">
		
		<!-- Style sheets -->
		<link rel="stylesheet" href="/resources/css/bootstrap.min.css"/>
		<link rel="stylesheet" href="/resources/css/style.css"/>
		<link rel="stylesheet" href="/resources/css/forms.css"/>
		
		<!-- Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Josefin+Slab" rel="stylesheet"/>
		<link href="https://fonts.googleapis.com/css?family=Yantramanav" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
		
		<!-- Scripts -->
		<script src="/resources/js/jquery-1.10.2.min.js"></script>
		<script src="/resources/js/sell_item.js"></script>
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
				<div class="col-md-8">
						<header class="formHeader">
							<h1>Sell an item</h1>
						</header>
						<form method="post" class="form-horizontal">
							<div class="form-group">
								<label class="control-label col-sm-2" for="email">Name:</label>
								<div class="inputContainer col-sm-8">
									<input type="text" name="name" class="form-control" placeholder="Enter Item Name">
								</div>
								<span id="nameErrorMessage" class="control-label col-sm-2 errorMessage"></span>
							</div>
							
							<div class="form-group">
								<label class="control-label col-sm-2" for="pwd">Description:</label>
								<div class="inputContainer col-sm-8"> 
									<input type="text" name="description" class="form-control" placeholder="Enter Item Description">
								</div>
								<span id="descriptionErrorMessage" class="control-label col-sm-2 errorMessage"></span>
							</div>
							
							<div class="form-group">
								<label class="control-label col-sm-2" for="pwd">Price:</label>
								<div class="inputContainer col-sm-8"> 
									<input type="number" name="price" class="form-control" placeholder="Enter Item Price">
								</div>
								<span id="priceErrorMessage" class="control-label col-sm-2 errorMessage"></span>
							</div>
							
							<div class="form-group">
								<label class="control-label col-sm-2" for="pwd">Images:</label>
								<div class="inputContainer col-sm-8"> 
									<input type="text" name="images" class="form-control" placeholder="Enter Images URLs (seperated by ;)">
								</div>
								<span id="imagesErrorMessage" class="control-label col-sm-2 errorMessage"></span>
							</div>
							
							<div class="form-group"> 
								<div class="col-sm-offset-2 col-sm-10">
									<button id="sellItemButton" type="submit" class="btn btn-default">Sell this item</button>
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