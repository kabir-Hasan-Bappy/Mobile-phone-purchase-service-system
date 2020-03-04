function check()
{
	if(pass())
	{
		return true;
		
	}
	if(cpassword())
	{
		
		return true;
	}

	return false;
}


function pass()
{
	
p2 = document.Change.npassword;	
p3 = p2.value.length;

		if(p3 == "")
		{		
				alert("Please Enter Password...");		
				
				p2.style.color = "red";	
	
				return false;
		}
		else
		{
			p2.style.color = "black";	
			return true;
		}
	
}

function cpassword()
{
	
p2 = document.Change.npassword;
cp = document.Change.c_password;

cl = cp.value.length;
		
		if(cl == "")
		{
			alert("Please Enter Confirm Password...");
			cp.style.color = "red";	
	
			return false;
		}
		else if(p2.value.match(cp.value))
		{
			cp.style.color = "black";	
			return true;
		}
		else
		{

		cp.style.color = "red";	
		alert("Sorry Password Not match...");
		return false;
		}

}