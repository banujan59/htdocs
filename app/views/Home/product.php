<!DOCTYPE HTML>
<html>
	<head>
		<title>Shoe++ - Product Information</title>
		<meta charset="utf-8"/>
		<link rel="icon" href="images/logo.png">
		
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
				
			<?php 
				if( $data["items"] == null || $data["items"][0] == null)
				{
					?>
						<div class="row">
							<div class="col-md-12">
								<p class="plusplusText">The item you are requesting could not be found.</p>
							</div>
						</div> <!-- End row -->
					<?php
				}
				
				else
				{
			?>
			<div class="row">
				<div class="col-md-5">
					<header>
						<h1><?php echo $data["items"][0]->NAME;?></h1>
					</header>
				</div>
			</div> <!-- End row -->
			<div class="row">
				<div class="col-md-12">
					<div class="photoBox">
					<!--The 'src' has to be variant.-->
						<img id="insertion" width="100%;" src="/resources/images/1.jpg"/>
						<div id="backButton" class="photoNavButton">&lt;</div>
						<div id="nextButton" class="photoNavButton">&gt;</div>
						<!--So do the echos.-->
						<script>
						var images = ["<?php echo "/resources/images/1.jpg"?>", "<?php echo "/resources/images/2.jpg"?>", "<?php echo "/resources/images/3.jpg"?>"];
						var currentImageIndex = 0;
						currentImageIndex = "insertion";
						$(".photoNavButton").click(function(e)
						{
							var id = $(this).attr("id");
							var src = "";
							var xAxisMovementCode = "";
							if(id == "backButton")
							{
								currentImageIndex--;
								
								if(currentImageIndex < 0)
									currentImageIndex = images.length - 1;
								
								xAxisMovementCode = "-20px";
							}
							
							else
							{
								currentImageIndex++;
								if(currentImageIndex == images.length)
									currentImageIndex = 0;
								
								xAxisMovementCode = "20px";
							}
							
							
							src = images[currentImageIndex];
							
							// apply animation
							$(".photoBox img").animate({"left" : xAxisMovementCode}, 200, function()
								{
									$(this).attr("src", src);
									$(this).animate({"left" : "0px"}, 200)
								});
						});
						</script>
					</div>
				</div>
			</div> <!-- End row -->
			<div class="row">
				<br/><br/><br/>
				<div class="col-md-3">
					<header>
						<h1>Order</h1>
					</header>
				</div>
			</div> <!-- End row -->
			<div class="row">
				<div class="col-md-12">
				<?php
					// if already in cart
					if( isset($data["order_status"][0]) && $data["order_status"][0]->status == "CART")
					{
						?>
							<button id="removeFromCartButton" itemID="<?php echo $data["items"][0]->ID;?>" class="btn btn-danger cartButton">🛒 REMOVE FROM CART</button>
						<?php 
					}
					
					else
					{
						?>
							<button id="addToCartButton" itemID="<?php echo $data["items"][0]->ID;?>" class="btn btn-success cartButton">🛒 ADD TO CART</button>
						<?php
					}
				?>
				</div>
			</div> <!-- End row -->
			<div class="row">
				<br/><br/><br/>
				<div class="col-md-3">
					<header>
						<h1>Description</h1>
					</header>
				</div>
			</div> <!-- End row -->
			<div class="row">
				<div class="col-md-12">
					<p class="plusplusText">
						<?php
							echo $data["items"][0]->DESCRIPTION;
						?>
						<br/>
						<b>Price: <?php echo $data["items"][0]->PRICE;?> <?php echo $_SESSION['COUNTRY_NAME'];?> Currency</b> <!--In this case, the country shown is fine cause the BUYER is from this country. But the numbers
																															are from the SELLER'S country, therefore, once you somehow connect the exchange rate, I'll convert.-->
						<br/>
						<b>Seller: <?php
								foreach($data["items"] as $item)
								{
									echo $item->seller_fname . ' ' . $item->seller_lname;
								}
							?></b> <!--After this, I would put the positivity percentage.-->
					</p>
				</div>
			</div> <!-- End row -->
			
			<div class="row">
				<br/><br/><br/>
				<div class="col-md-5">
					<header>
						<h1>Recommend to a friend!</h1>
					</header>
				</div>
			</div> <!-- End row -->
			<div class="row">
				<div class="col-md-12">
					<p class="plusplusText">
						Click <a href="mailto:abc@example.com?subject=New%20Item%20on%20Shoe++&body=Check%20out%20this%20item%20I%20found%20on%20Shoe++.%20It's%20called%20<?php $mailName = str_replace(" ", "%20", $data["items"][0]->NAME); echo $mailName; ?>">here</a> to recommend this item to a friend!
					</p>
				</div>
			</div> <!-- End row -->
			
			
			<?php
				if( isset($data["order_status"][0]) && $data["order_status"][0]->status == "PURCHASED")
				{
					// if the user has not posted a review yet, display a form to do so
					if( !isset($data["reviewByCurrentUser"][0]) )
					{
					?>
						<div class="row">
				<br/><br/><br/>
				<div class="col-md-5">
					<header>
						<h1>Review This Item</h1>
					</header>
				</div>
			</div> <!-- End row -->
			<div class="row">
				<div class="col-md-12">
					<p class="plusplusText">
						Since you have already purchased this item, you can review it.
					</p>
				</div>
			</div> <!-- End row -->
			<div class="row">
				<div class="col-md-12">
					<form method="post" class="form-horizontal">
							<div class="form-group">
								<label class="control-label col-sm-2" for="email">Review:</label>
								<div class="inputContainer col-sm-8">
									<textarea class="form-control" name="content" style="resize: none;"></textarea>
								</div>
							</div>
							
							<div class="form-group">
								<label class="control-label col-sm-2" for="pwd">Type of Review:</label>
								<div class="inputContainer col-sm-8"> 
									<select id="reviewTypeSelector" class="form-control">
										<option>Positive</option>
										<option>Negative</option>
									</select>
								</div>
							</div>
							
							<div class="form-group">
								<label class="control-label col-sm-2" for="pwd">Rating (stars):</label>
								<div class="inputContainer col-sm-8"> 
									<select id="ratingSelector" class="form-control">
										<option>5</option>
										<option>4</option>
										<option>3</option>
										<option>2</option>
										<option>1</option>
									</select>
								</div>
							</div>
							
							<div class="form-group"> 
								<div class="col-sm-offset-2 col-sm-10">
									<button id="submitReviewButton" itemID="<?php echo $data["items"][0]->ID;?>" class="btn btn-default">Submit</button>
								</div>
							</div>
						</form>
				</div>
			</div> <!-- End row -->
					<?php 
					}
					
					// if the user already has a review, display the review
					else
					{
						?>
							<div class="row">
				<br/><br/><br/>
				<div class="col-md-5">
					<header>
						<h1>Your Review:</h1>
					</header>
				</div>
			</div> <!-- End row -->
			<div class="row">
				<div class="col-md-12">
					<table>
						<tbody>
							<tr>
								<th>Review Content: </th>
								<td><?php echo $data["reviewByCurrentUser"][0]->CONTENT; ?></td>
							</tr>
							<tr>
								<th>Review Rating: </th>
								<td><?php 
										switch($data["reviewByCurrentUser"][0]->RATING)
												{
													case 1:
														?>
															⭐
														<?php
													break;
													
													case 2:
														?>
															⭐�
														<?php
													break;
													
													case 3:
														?>
															⭐⭐⭐
														<?php
													break;
													
													case 4:
														?>
															⭐⭐⭐⭐
														<?php
													break;
													
													case 5:
														?>
															⭐⭐⭐⭐⭐
														<?php
													break;
												}
									?></td>
							</tr>
							<tr>
								<th>Review Type: </th>
								<td><?php echo $data["reviewByCurrentUser"][0]->TYPE; ?></td>
							</tr>
						</tbody>
					</table>
						<br/>
					<button class="btn btn-danger" itemID="<?php echo $data["items"][0]->ID;?>" id="modifyReviewButton">Modify My Review</button>
					<button class="btn btn-danger" itemID="<?php echo $data["items"][0]->ID;?>" id="deleteReviewButton">Delete My Review</button>
				</div>
			</div> <!-- End row -->
						<?php 
					}
				}
			?>
			
			<div class="row">
				<br/><br/><br/>
				<div class="col-md-3">
					<header>
						<h1>Reviews</h1>
					</header>
				</div>
			</div> <!-- End row -->
			
			<?php
				if($data["reviews"] == null)
				{
				?>
					<div class="row">
						<div class="col-md-12">
							<p class="plusplusText">There are no reviews for this item.</p>
						</div>
					</div>
				<?php
				}
				
				else
				{
				?>
			<div class="row">
				<div class="col-md-12">
					<table class="table">
						<thead>
							<tr>
								<th>From</th>
								<th>Rating</th>
								<th>Review</th>
							</tr>
						</thead>
						<tbody>
							<?php
								foreach($data["reviews"] as $review)
								{
									?>
									<tr>
										<td><?php echo $review->writer_fname . ' ' . $review->writer_lname;?></td>
										<td>
											<?php
												switch($review->RATING)
												{
													case 1:
														?>
															⭐
														<?php
													break;
													
													case 2:
														?>
															⭐�
														<?php
													break;
													
													case 3:
														?>
															⭐⭐⭐
														<?php
													break;
													
													case 4:
														?>
															⭐⭐⭐⭐
														<?php
													break;
													
													case 5:
														?>
															⭐⭐⭐⭐⭐
														<?php
													break;
												}
											?>
										</td>
										<td><?php echo $review->CONTENT;?></td>
									</tr>
									<?php
								}
							?>
						</tbody>
					</table>
				</div>
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