$(function()
{
	var images = ["images/1.jpg", "images/2.jpg", "images/3.jpg"];
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
})