<!DOCTYPE HTML>
<html>
	<head>
		<title>Shoe++ - Search Result</title>
		<meta charset="utf-8"/>
		<link rel="icon" href="/resources/images/logo.png">
		
		<!-- Style sheets -->
		<link rel="stylesheet" href="/resources/css/bootstrap.min.css"/>
		<link rel="stylesheet" href="/resources/css/style.css"/>
		<link rel="stylesheet" href="/resources/css/search.css"/>
		
		<!-- Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Josefin+Slab" rel="stylesheet"/>
		<link href="https://fonts.googleapis.com/css?family=Yantramanav" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
		
		<!-- Scripts -->
		<script src="/resources/js/jquery-1.10.2.min.js"></script>
		<script src="/resources/js/search.js"></script>
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
				<div class="col-md-12">
					<header>
						<h1>Search Results For: '<?php echo $data['name'];?>'</h1>
					</header>
				</div> <!-- End col -->
			</div> <!-- End row -->
				<br/>
				<hr/>
			
			<?php
				foreach($data["items"] as $item)
				{
					if($item != null)
					{
					?>
						<hr/>
						<div class="row">
							<div class="col-md-3"></div>
							<div class="col-md-6">
								<div class="resultBox" link="/home/product/<?php echo $item->ID;?>">
									<div class="resultDescription">
										<ul>
											<li>Name: <?php echo $item->NAME;?></li>
											<li>Price: <?php echo $item->PRICE;?> (In Seller's Currency)</li>
										</ul>
									</div>
									<div class="preview" style="background-image:url('/resources/images/logo.png');"></div>
								</div>
							</div> <!-- End col -->
						</div> <!-- End row -->
					<?php
					}
				}
			?>
			

			<hr/>

			<footer>
				<p>&copy; Shoe++ 2017</p>
			</footer>

		</div><!--/.container-->

	</body>
</html>