function validation3()
{
	
	if(alpha2())
	{	
				return true;								
	}
	
	if(alphabetic2())
	{
			return true;								
	}
	
	if(num2())
	{
						return true;								
	}	
	
	return false;

}

function alpha2()
{

f = document.myprofile.f;
fl = f.value.length;

var alphaExpe = /^[a-zA-Z]+$/;

	if(f.value.match(alphaExpe)) 
	{
		f.style.color = "black";			
		return true; 
		
		
	}
	else if(fl == "")
	{
	f.value = "Could not be Empty";
	f.style.color = "red";	
	
	return false; 		
	}
	else
	{
		 
	f.value = "Only Letter are aceepted";
	f.style.color = "red";	
	
	return false; 
	
	}
	
}



function alphabetic2()
{

l = document.myprofile.l;
len = l.value.length;	
var alphaExp = /^[a-zA-Z]+$/;


		if(l.value.match(alphaExp)) 
		{ 
			l.style.color = "black";	
			return true; 
			
		}
		else if(len == 0)
		{
			
			l.value = "Could not be Empty";
			l.style.color = "red";	
	
			return false; 
			
		}
		else
		{
		
		 
			l.value = "Only Letter are aceepted";
			l.style.color = "red";	
	
			return false; 
			
		}
}


function num2()
{

 c = document.myprofile.c;
 
 cl = c.value.length;
 	
var nExp = /^[0-9]+$/;


		if(c.value.match(nExp)) 
		{ 
	
			c.style.color = "black";
			return true; 
		
		} 
		else if(cl == 0)
		{
			c.value = "Could Not be Empty";	
			c.style.color = "red";	
	
			return false; 
		
		}
		else
		{
			c.value = "Only Numbers are accepted";	
			c.style.color = "red";	
	
			return false; 
			
		}


}
