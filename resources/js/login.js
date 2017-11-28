$(function()
{
	$("#loginUserButton").click(function(e)
	{
		// prevent form from submitting
		e.preventDefault();
		
		// fade out the server output
		$(".serverOutput").fadeTo(150, 0);
		
		// get the form data
		var email = $("input[name=email]").val();
		var password = $("input[name=password]").val();
		
		// validate data object
		var data = {
			email : email,
			password : password,
		}
		
		$.post("/home/login", data, function(serverMessage)
		{
			// if login is successful
			if(serverMessage == "login successful!")
			{
				$(".serverOutput").text("Login successful! You will be redirected in a few seconds.");
				$(".serverOutput").css("color", "green");
				
				setTimeout(function()
				{
					location = "/home/index";
				}, 2500);
			}
			
			// if login is failed
			else
			{
				$(".serverOutput").text("Login failed! Make sure your inputs are valid");
				$(".serverOutput").css("color", "red");
			}
			
			$(".serverOutput").fadeTo(500, 1);
		});
	});
});