$(function()
{
	var images = ["/resources/images/1.jpg", "/resources/images/2.jpg", "/resources/images/3.jpg"];
	var currentImageIndex = 0;
	
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
	
	
	// if add / remove button are clicked...
	$(".cartButton").click(function(e)
	{
		e.preventDefault();
		var itemID = $(this).attr("itemID"); // get the item id
		var buttonID = $(this).attr("id");// get id of button
		
		// send the request
		var data;
		var url = "/home/product/" + itemID
		
		if(buttonID == "removeFromCartButton")
		{
			data = {"operation" : "remove_from_cart"};
		}
		
		else if(buttonID == "addToCartButton")
		{
			data = {"operation" : "add_to_cart"};
		}
		
		// send the request
		$.post(url, data, function(serverMessage)
		{
			// if the item was added to the cart
			if(serverMessage == "added to cart")
			{
				window.alert("The item was added to the cart.");
				
				$("#addToCartButton").removeClass("btn-success");
				$("#addToCartButton").addClass("btn-danger");
				$("#addToCartButton").text("REMOVE FROM CART")
				$("#addToCartButton").attr("id", "removeFromCartButton");
			}
			
			// if the item was removed from the cart
			else if(serverMessage == "removed from cart")
			{
				window.alert("The item was removed from the cart.");
				
				$("#removeFromCartButton").removeClass("btn-danger");
				$("#removeFromCartButton").addClass("btn-success");
				$("#removeFromCartButton").text("ADD TO CART")
				$("#removeFromCartButton").attr("id", "addToCartButton");
				
			}
			
			else if(serverMessage == "user not logged in")
			{
				window.alert("You are not logged in.");
				location = "/home/login";
			}
			
			// if we get another error
			else
			{
				console.log(serverMessage);
				window.alert("Your request could not be completed.");
			}
		});
	});
	
	
	// the reviews
	$("#submitReviewButton").click(function(e)
	{
		e.preventDefault();
		
		// get input
		var itemID = $(this).attr("itemID");
		var content = $("textarea").val();
		var reviewType = $("#reviewTypeSelector").val();
		var rating = $("#ratingSelector").val();
		
		// create data object
		var data = 
		{
			"operation" : "post",
			"ITEM_ID" : itemID,
			"RATING" : rating,
			"CONTENT" : content,
			"TYPE" : reviewType
		};
		
		// send requeset
		$.post("/home/review", data, function(serverMessage)
		{
			if(serverMessage == "success")
			{
				location.reload();
			}
			
			else
			{
				console.log(serverMessage);
				window.alert("Your request could not be completed.");
			}
		});
	});
	
	$("#modifyReviewButton").click(function(e)
	{
		e.preventDefault();
		
		// get input
		var itemID = $(this).attr("itemID");
		
		// create data object
		var data =
		{
			//I figure that maybe 'delete' should be changed.
			"operation" : "update",
			"ITEM_ID" : itemID
		};
		
		// request
		/*$.post("/home/review", data, function(serverMessage)
		{
			if(serverMessage == "success")
			{
				location.reload();
			}
			
			else
			{
				console.log(serverMessage);
				window.alert("Something went wrong... Please try again later.");
			}
		});*/
	});
	
	$("#deleteReviewButton").click(function(e)
	{
		e.preventDefault();
		
		// get input
		var itemID = $(this).attr("itemID");
		
		// create data object
		var data =
		{
			"operation" : "delete",
			"ITEM_ID" : itemID
		};
		
		// request
		$.post("/home/review", data, function(serverMessage)
		{
			if(serverMessage == "success")
			{
				location.reload();
			}
			
			else
			{
				console.log(serverMessage);
				window.alert("Something went wrong... Please try again later.");
			}
		});
	});
})