$(function()
{
	$("#deleteItemButton").click(function(e)
	{
		e.preventDefault();
		
		// Only delete if user agreed to do so!
		if (confirm('Are you sure you want to delete this item?')) 
		{
			$.post("/home/cart", {"itemIDToDelete" : $("	#deleteItemButton").attr("itemID")}, function(serverMessage)
				{
					if(serverMessage == "Item deleted!")
					{
						location.reload();
					}
					
					else
					{
						console.log(serverMessage);
						window.alert("Could not delete. Try again later.");
					}
				});
		}
	});
});