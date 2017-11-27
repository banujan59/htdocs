$(function()
{
	$("#registerUserButton").click(function(e)
	{
		// prevent form from submitting
		e.preventDefault();
		
		// get the form data
		var email = $("input[name=email]").val();
		var password = $("input[name=password]").val();
		var uname = $("input[name=uname]").val();
		var fname = $("input[name=fname]").val();
		var lname = $("input[name=lname]").val();
		var countryID = $("select").val();
		
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
				window.alert("user registered");
			}
			
			else
			{
				//window.alert("Error registering");
				window.alert(serverMessage); // TODO take this line out
			}
		});
	});
});