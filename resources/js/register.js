$(function()
{
	$("#registerUserButton").click(function(e)
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
		var email = $("input[name=email]").val();
		var password = $("input[name=password]").val();
		var confirmPassword = $("input[name=confirmPassword]").val();
		var uname = $("input[name=uname]").val();
		var fname = $("input[name=fname]").val();
		var lname = $("input[name=lname]").val();
		var countryID = $("select").val();
		
		// check if email is not empty
		if(email == "")
		{
			errorFields.push($("#emailErrorMessage"));
			errorFields[errorFields.length - 1].text("Invalid Input");
		}
		
		// check if both password matches aren't empty
		if( (password != confirmPassword) || (password == "") || (confirmPassword == "") )
		{
			errorFields.push($("#passwordErrorMessage"));
			errorFields[errorFields.length - 1].text("Password does not match");
			errorFields.push($("#confirmPasswordErrorMessage"));
			errorFields[errorFields.length - 1].text("Password does not match");
		}
		
		// input checking for uname (check for value)
		if(uname == "")
		{
			errorFields.push($("#unameErrorMessage"));
			errorFields[errorFields.length - 1].text("Invalid Input");
		}
		
		// input checking for fname (check for a digit)
		pattern = new RegExp("[0-9]+");
		if( pattern.test(fname) || fname == "" )
		{
			errorFields.push($("#fnameErrorMessage"));
			errorFields[errorFields.length - 1].text("Invalid Input");
		}
		
		// input checking for lname (check for a digit)
		if( pattern.test(lname) || lname == "")
		{
			errorFields.push($("#lnameErrorMessage"));
			errorFields[errorFields.length - 1].text("Invalid Input");
		}
		
		//input checking for country
		if(countryID == "Select Your Country")
		{
			errorFields.push($("#countryErrorMessage"));
			errorFields[errorFields.length - 1].text("Select a Country");
		}
		
		
		// to proceed, we need to check if there are no input errors
		if(errorFields.length == 0)
		{
			// create data object
			var data = {
				email : email,
				password : password,
				uname : uname,
				fname : fname,
				lname : lname,
				countryID : countryID,
			}
		
			$.post("/home/register", data, function(serverMessage)
			{
				if(serverMessage == "user registed!")
				{
					$(".serverOutput").text("User registered! You will be redirected to the login page.");
					$(".serverOutput").css("color", "green");
					
					setTimeout(function()
					{
						location = "/home/login";
					}, 2500)
				}
			
				else
				{
					console.log(serverMessage);
					$(".serverOutput").text("Error registering. Please try again later");
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