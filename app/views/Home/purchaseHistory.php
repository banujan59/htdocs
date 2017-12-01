<!DOCTYPE HTML>
<html>
	<head>
		<title>Shoe++ - Purchase History</title>
		<meta charset="utf-8"/>
		<link rel="icon" href="/resources/images/logo.png">
		
		<!-- Style sheets -->
		<link rel="stylesheet" href="/resources/css/bootstrap.min.css"/>
		<link rel="stylesheet" href="/resources/css/style.css"/>
		<link rel="stylesheet" href="/resources/css/product.css"/>
		
		<!-- Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Josefin+Slab" rel="stylesheet"/>
		<link href="https://fonts.googleapis.com/css?family=Yantramanav" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
		
		<!-- Scripts -->
		<script src="/resources/js/jquery-1.10.2.min.js"></script>
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
				<div class="col-md-5">
					<header>
						<h1>My Purchased Items</h1>
					</header>
				</div>
				</div> <!-- End row -->
			<?php
					if( !isset($data["items"][0]) || $data["items"][0] == null )
					{
						?>
							<p class="plusplusText">There is no items to show.</p>
						<?php 
					}
					
					else
					{
				?>
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
							</tr>
						</thead>
						<tbody>
							<?php
								foreach($data["items"] as $item)
								{
									?>
									<tr>
										<td><a href="/home/product/<?php echo $item->ID;?>"> <?php echo $item->NAME;?> </a></td>
										<td><?php echo $item->seller_fname . ' ' . $item->seller_lname;?></td>
										<td><?php echo $item->PRICE;?></td>
									</tr>
									<?php
								}
							?>
						</tbody>
					</table>
					
					<?php
					}
					?>
				</div>
			</div> <!-- End row -->
			

			<hr/>

			<footer>
				<p>&copy; Shoe++ 2017</p>
			</footer>

		</div><!--/.container-->

	</body>
</html>