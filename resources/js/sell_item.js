$(function()
{
	$("#sellItemButton").click(function(e)
	{
		// prevent form from submitting
		e.preventDefault();
		
		// fade out any error messages
		$(".errorMessage").fadeTo(500, 0);
		$(".errorMessage").css("display", "none");
		$(".col-sm-6").toggleClass("col-sm-6").toggleClass("col-sm-8");
		$(".errorMessage").toggleClass("col-sm-4").toggleClass("col-sm-2");
		$(".serverOutput").fadeTo(500, 0);
		
		// variable to store the error fields (if needed)
		var errorFields = [];
		
		// variable to store the pattern of regex used for input error checking
		var pattern = null;
		
		// get the form data
		var name = $("input[name=name]").val();
		var description = $("input[name=description]").val();
		var price = $("input[name=price]").val();
		var images = $("input[name=images]").val();
		
		// input check for name
		if(name == "")
		{
			errorFields.push($("#nameErrorMessage"));
			errorFields[errorFields.length - 1].text("Invalid Input");
		}
		
		// input check for description
		if(description == "")
		{
			errorFields.push($("#descriptionErrorMessage"));
			errorFields[errorFields.length - 1].text("Invalid Input");
		}
		
		
		// input checking for price
		pattern = new RegExp("[0-9]+(\.[0-9][0-9]?)?"); // pattern to check numbers & decimal
		if(price == "" || !pattern.test(price) )
		{
			errorFields.push($("#priceErrorMessage"));
			errorFields[errorFields.length - 1].text("Invalid Input");
		}
		
		// input checking for images
		if( images = "")
		{
			errorFields.push($("#imagesErrorMessage"));
			errorFields[errorFields.length - 1].text("Invalid Input");
		}
		
		
		// to proceed, we need to check if there are no input errors
		if(errorFields.length == 0)
		{
			// create data object
			var data = {
				name : name,
				description : description,
				price : price,
				images : images
			}
		
			$.post("/home/sellItem", data, function(serverMessage)
			{
				if(serverMessage == "item saved!")
				{
					$(".serverOutput").text("Your item has been posted! You will be redirected soon.");
					$(".serverOutput").css("color", "green");
					
					setTimeout(function()
					{
						location = "/home/";
					}, 2500)
				}
			
				else
				{
					console.log(serverMessage);
					$(".serverOutput").text("Error posting item. Please try again later");
					$(".serverOutput").css("color", "red");
				}
				
				$(".serverOutput").fadeTo(500, 1);
			});
		}
		
		// if we have errors, display them
		else
		{
			$(".col-sm-8").toggleClass("col-sm-6").toggleClass("col-sm-8");
			for(var i = 0 ; i < errorFields.length ; i++)
			{
				errorFields[i].removeClass("col-sm-2");
				errorFields[i].addClass("col-sm-4");
				errorFields[i].fadeTo(500, 1);
			}
		}
	});
});