$(function()
{
	$("#loginUserButton").click(function(e)
	{
		// prevent form from submitting
		e.preventDefault();
		
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
				window.alert("Login successful! You will be redirected in a few seconds.");
				setTimeout(function()
				{
					location = "/home/index";
				}, 1000);
			}
			
			// if login is failed
			else
			{
				window.alert("login failed!");
			}
		});
	});
});