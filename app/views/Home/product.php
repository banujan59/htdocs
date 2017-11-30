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
						"insertion" = currentImageIndex;
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
					<button class="btn btn-success">🛒 ADD TO CART</button>
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
					</p>
				</div>
			</div> <!-- End row -->
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
					print_r($data["reviews"]);
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
										<td><?php echo $review->WRITER_ID;?></td>
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
							<tr>
								<td>Austin</td>
								<td>⭐⭐⭐⭐⭐</td>
								<td>This is the best product ever! My gf Veronique likes it.</td>
							</tr>
							<tr>
								<td>Raymond</td>
								<td>⭐⭐⭐</td>
								<td>I ordered a size 7. Those were too large for me!</td>
							</tr>
							<tr>
								<td>Banujan</td>
								<td>⭐⭐⭐⭐⭐</td>
								<td>These are the best shoes ever. If I could give more stars, I would. The seller was cool.</td>
							</tr>
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