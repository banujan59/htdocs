<!DOCTYPE HTML>
<html>
	<head>
		<title>Shoe++ - My Cart</title>
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
		<script src="/resources/js/cart.js"></script>
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
				<div class="col-md-3">
					<header>
						<h1>My Cart</h1>
					</header>
				</div>
				</div> <!-- End row -->
				<div class="row">
					<div class="col-md-12">
			<?php
					if( !isset($data["items"][0]) || $data["items"][0] == null )
					{
						?>
							<p class="plusplusText">You have no items in your cart.</p>
						<?php 
					}
					
					else
					{
				?>
					<p class="plusplusText">
						Total Without Shipping: <?php $total = 0.0;
									  //$shipping;
									  foreach($data["items"] as $item)
									  {
										  $originalPrice = $item->PRICE;
										  $sellerExchangeRate = $item->exchange_rate;
										  $toCanadian = ($originalPrice * 1000) / ($sellerExchangeRate * 1000);
										  $buyerExchangeRate = $_SESSION['EXCHANGE_RATE'];
										  $toDisplay = $toCanadian * $buyerExchangeRate;
										  $total = $total + $toDisplay;
									  }
									  /*$radioButtons = documents.getElementsByName("shipping");
									  if ($radioButtons[0].checked)
										  $shipping = $total * 0.05;
									  else if ($radioButtons[1].checked)
										  $shipping = $total * 0.15;
									  else if ($radioButtons[2].checked)
										  $shipping = $total * 0.25;
									  $total = $total + $shipping;*/
									  echo number_format((float)$total, 2, '.', '');
									  echo ' ';
									  if(isset($_SESSION['COUNTRY_NAME']))echo $_SESSION['COUNTRY_NAME'];?> Currency
					</p>
					<form name="shipping" class="plusplusText">
					  <input type="radio" name="shipping" value="standard" checked> Standard Shipping [+5%] <b>→ <?php $standard = 0.0;
																														$standard = $total + ($total * 0.05);
																														echo number_format((float)$standard, 2, '.', '');
																														echo ' ';
																														if(isset($_SESSION['COUNTRY_NAME']))echo $_SESSION['COUNTRY_NAME'];?> Currency</b><br>
					  <input type="radio" name="shipping" value="premium"> Premium Shipping [+15%] <b>→ <?php $standard = 0.0;
																														$standard = $total + ($total * 0.15);
																														echo number_format((float)$standard, 2, '.', '');
																														echo ' ';
																														if(isset($_SESSION['COUNTRY_NAME']))echo $_SESSION['COUNTRY_NAME'];?> Currency</b><br>
					  <input type="radio" name="shipping" value="yotta"> Yotta Shipping [+25%] <b>→ <?php $standard = 0.0;
																														$standard = $total + ($total * 0.25);
																														echo number_format((float)$standard, 2, '.', '');
																														echo ' ';
																														if(isset($_SESSION['COUNTRY_NAME']))echo $_SESSION['COUNTRY_NAME'];?> Currency</b>
					</form>
					<br/>
					<button id="clearCartButton" type="button" class="cartOptionButton btn btn-danger">Clear Cart</button>
					<button id="paymentButton" type="button" class="cartOptionButton btn btn-success">Proceed to payment</button>
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
							<?php
								foreach($data["items"] as $item)
								{
									?>
									<tr>
										<td><a href="/home/product/<?php echo $item->ID;?>"> <?php echo $item->NAME;?> </a></td>
										<td><?php echo $item->seller_fname . ' ' . $item->seller_lname;?></td>
										<td><?php $originalPrice = $item->PRICE;
												  $sellerExchangeRate = $item->exchange_rate;
												  $toCanadian = ($originalPrice * 1000) / ($sellerExchangeRate * 1000);
												  $buyerExchangeRate = $_SESSION['EXCHANGE_RATE'];
												  $toDisplay = $toCanadian * $buyerExchangeRate;
												  echo number_format((float)$toDisplay, 2, '.', '');?></td>
										<td>
											<button itemID="<?php echo $item->ID;?>" type="button" class="removeFromCartButton btn btn-danger">Remove From Cart</button>
										</td>
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