$(function()
{
	$("#deleteItemButton").click(function(e)
	{
		e.preventDefault();
		
		// Only delete if user agreed to do so!
		if (confirm('Are you sure you want to delete this item?')) 
		{
			$.post("/home/myItemsForSale", {"itemIDToDelete" : $("	#deleteItemButton").attr("itemID")}, function(serverMessage)
				{
					if(serverMessage == "item deleted!")
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