$(function()
{
	$("#modifyUserButton").click(function(e)
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
		if(password == "")
		{
			errorFields.push($("#passwordErrorMessage"));
			errorFields[errorFields.length - 1].text("Password must have a value");
			errorFields.push($("#confirmPasswordErrorMessage"));
			errorFields[errorFields.length - 1].text("Password must have a value");
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
				uname : uname,
				fname : fname,
				lname : lname,
				countryID : countryID,
				password : password
			}

			//window.alert(email + uname + fname + lname + password);
			
			$.post("/home/modify", data, function(serverOutput)
			{
				if(serverOutput == "current pwd invalid") // if current pwd entered is invalid
				{
					$(".serverOutput").text("The old password entered is invalid");
					$(".serverOutput").css("color", "red");
				}
				
				if(serverOutput == "success")
				{
					$(".serverOutput").text("Information changed! You will be redirected back soon.");
					$(".serverOutput").css("color", "green");
					
					setTimeout(function()
					{
						location = "/home/userinfo";
					}, 2500)
				}
			
				else
				{
					console.log(serverOutput);
					$(".serverOutput").text("Error updating. Please try again later.");
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