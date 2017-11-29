<!DOCTYPE HTML>
<html>
	<head>
		<title>Shoe++ - My Items for Sale</title>
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
		<script src="/resources/js/product.js"></script>
		<script src="/resources/js/myItemsForSale.js"></script>
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
				<?php
					if($data["items"] != null)
					{
					?>
					<table class="table">
						<thead>
							<tr>
								<th>Name</th>
								<th>Price</th>
								<th>Option</th>
							</tr>
						</thead>
						<tbody>
							<?php
								foreach($data["items"] as $item)
								{
									?>
									<tr>
										<td><a href="/home/product/<?php echo $item->ID;?>"> <?php echo $item->NAME;?> </a></td>
										<td><?php echo $item->PRICE;?></td>
										<td>
											<button id="deleteItemButton" itemID="<?php echo $item->ID;?>" type="button" class="btn btn-danger">Delete Item</button>
										</td>
									</tr>
									<?php
								}
							?>
						</tbody>
					</table>
					<?php
					}
					
					else // if no items were found
					{
						?>
							<p class="plusplusText">
								You have no items on sale.
							</p>
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