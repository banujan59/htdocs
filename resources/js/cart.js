$(function()
{
	$(".removeFromCartButton").click(function(e)
	{
		e.preventDefault();
		var itemID = $(this).attr("itemID");
		
		// prepare request
		var data = {"operation" : "remove_from_cart"};
		var url = "/home/product/" + itemID;
		
		// send request
		$.post(url, data, function(serverMessage)
		{
			if(serverMessage == "removed from cart")
			{
				location.reload();
			}
			
			else
			{
				console.log(serverMessage);
				window.alert("Your request could not be proceeded at this momement");
			}
		});
	});
	
	$(".cartOptionButton").click(function(e)
	{
		e.preventDefault();
		
		
		var data;
		
		if($(this).attr("id") == "clearCartButton")
		{
			data = {"operation" : "clear_cart"};
		}
		
		else if($(this).attr("id") == "paymentButton")
		{
			data = {"operation" : "pay"};
		}
		
		$.post("/home/product/0", data, function(serverMessage)
		{
			if(serverMessage == "cart cleared")
			{
				location.reload();
			}
			
			else if(serverMessage == "payed")
			{
				window.alert("You have purchased all items in your cart");
				location.reload();
			}
			
			else
			{
				console.log(serverMessage);
				window.alert("could not proceed your request");
			}
		});
	});
});