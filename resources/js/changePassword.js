$(function()
{
	$("#changePwdButton").click(function(e)
	{
		// prevent form from submitting
		e.preventDefault();
		
		// fade out any error messages
		$(".errorMessage").fadeTo(500, 0);
		$(".errorMessage").css("display", "none");
		$(".col-sm-5").toggleClass("col-sm-5").toggleClass("col-sm-8");
		$(".errorMessage").toggleClass("col-sm-4").toggleClass("col-sm-2");
		$(".serverOutput").fadeTo(500, 0);
		
		// get inputs
		var oldPwd = $("input[name=oldPwd]").val();
		var newPwd = $("input[name=newPwd]").val();
		var confirmNewPwd = $("input[name=confirmNewPwd]").val();
		
		// variable to store the error fields (if needed)
		var errorFields = [];
		
		// verify oldPwd
		if(oldPwd == "")
		{
			errorFields.push($("#oldPasswordErrorMessage"));
			errorFields[errorFields.length - 1].text("Invalid input");
		}
		
		// make sure input matches in confirmation
		if( (newPwd != confirmNewPwd) || (newPwd == "") || (confirmNewPwd == "") )
		{
			errorFields.push($("#newPasswordErrorMessage"));
			errorFields[errorFields.length - 1].text("Invalid Password");
			errorFields.push($("#confirmNewPasswordErrorMessage"));
			errorFields[errorFields.length - 1].text("Invalid Password");
		}
		
		// to proceed, we need to check if there are no input errors
		if(errorFields.length == 0)
		{
			var data =
			{
				"oldPwd" : oldPwd,
				"newPwd" : newPwd
			};
			
			$.post("/home/changePassword", data, function(serverOutput)
			{
				if(serverOutput == "current pwd invalid") // if current pwd entered is invalid
				{
					$(".serverOutput").text("The current password entered is invalid");
					$(".serverOutput").css("color", "red");
				}
				
				else if(serverOutput == "success") // if pwd was changed
				{
					$(".serverOutput").text("Password changed! You will be redirected soon.");
					$(".serverOutput").css("color", "green");
					
					setTimeout(function()
					{
						location = "/home/userinfo";
					}, 2500)
				}
				
				else // if the process failed
				{
					console.log(serverOutput);
					$(".serverOutput").text("Could not complete you request. Please try again later");
					$(".serverOutput").css("color", "red");
				}
				
				$(".serverOutput").fadeTo(500, 1);
			});
		}
		
		else // if we have errors
		{
			$(".col-sm-8").toggleClass("col-sm-5").toggleClass("col-sm-8");
			for(var i = 0 ; i < errorFields.length ; i++)
			{
				errorFields[i].removeClass("col-sm-2");
				errorFields[i].addClass("col-sm-4");
				errorFields[i].fadeTo(500, 1);
			}
		}
	});
});