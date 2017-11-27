<!DOCTYPE HTML>
<html>
	<head>
		<title>Shoe++ - Home</title>
		<meta charset="utf-8"/>
		<link rel="icon" href="images/logo.png">
		
		<!-- Style sheets -->
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<link rel="stylesheet" href="css/style.css"/>
		<link rel="stylesheet" href="css/product.css"/>
		
		<!-- Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Josefin+Slab" rel="stylesheet"/>
		<link href="https://fonts.googleapis.com/css?family=Yantramanav" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
		
		<!-- Scripts -->
		<script src="js/jquery-1.10.2.min.js"></script>
		<script src="js/product.js"></script>
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
				<div class="col-md-3">
					<header>
						<h1>My Cart</h1>
					</header>
				</div>
			</div> <!-- End row -->
			<div class="row">
				<div class="col-md-12">
					<p class="plusplusText">
						Total : 0$
					</p>
					<button type="button" class="btn btn-danger">Clear Cart</button>
					<button type="button" class="btn btn-success">Proceed to payment</button>
				</div>
			</div> <!-- End row -->
			<br/><br/>
			<div class="row">
				<div class="col-md-3">
					<header>
						<h1>Content</h1>
					</header>
				</div>
			</div> <!-- End row -->
			<div class="row">
				<div class="col-md-12">
					<table class="table">
						<thead>
							<tr>
								<th>Name</th>
								<th>Seller</th>
								<th>Price</th>
								<th>Option</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><a href="">Shoe 1</a></td>
								<td>Austin from Austin, Texas</td>
								<td>999.99$</td>
								<td>
									<button type="button" class="btn btn-danger">Remove From Cart</button>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div> <!-- End row -->
			

			<hr/>

			<footer>
				<p>&copy; Shoe++ 2017</p>
			</footer>

		</div><!--/.container-->

	</body>
</html>