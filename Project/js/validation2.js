function c2()
{
	if(document.checkout.payment.checked)
	{
		var nc = document.checkout.Nc;
		var ccn = document.checkout.CCno;
		
		
		var nc2 = nc.value.length;
		var ccn2 = ccn.value.length;
	

if(nc2 == 0)
{
	
	alert("Please Enter Name on Credit Card....");
	document.checkout.Nc.focus();
}
else
{
	document.checkout.ccn.focus();
	
}
if(ccn2 == 0)
{
	
	alert("Please Enter Credit Card Number.....");
	document.checkout.ccn.focus();
}
else
{
	document.checkout.cvv.focus();
	
}



		}
	
}

function c(radio)
{

var visSetting = (radio.checked) ? "visible" : "hidden"

document.getElementById("creditcard").style.visibility = visSetting;

}


function c2(radio)
{

var visSetting = (radio.checked) ? "hidden" : "visible"

document.getElementById("creditcard").style.visibility = visSetting;

}



function validation5()
{
	
	if(alphabet())
	{	
				return true;								
	}
	
	if(alphabet2())
	{
			return true;								
	}
	
	if(numb())
	{
						return true;								
	}	
		if(numb2())
	{
						return true;								
	}	
	
	if(validateE())
	{
		
		return true;
	}
	
	
	return false;

}

function alphabet()
{

f = document.checkout.sfname;
fl = f.value.length;

var alphaExpe2 = /^[a-zA-Z]+$/;

	if(f.value.match(alphaExpe2)) 
	{ 
		f.style.color = "black";	
		document.checkout.slname.focus();

		return true; 
				
	}
	else if(fl == 0)
	{
	f.value = "Plz Enter First name";
	f.style.color = "red";	
	document.checkout.sfname.focus();
	return false; 		
	}
	else
	{
	 
	f.value = "Only Letter are aceepted";
	f.style.color = "red";	
	document.checkout.sfname.focus();
	return false; 
	}
	
}



function alphabet2()
{

l = document.checkout.slname;
len = l.value.length;	
var alphaExp = /^[a-zA-Z]+$/;


		if(l.value.match(alphaExp)) 
		{ 
			document.checkout.semail.focus();
			l.style.color = "black";	
			return true; 
			
		}
		else if(len == 0)
		{
			
			l.value = "Plz Enter Last name";
			l.style.color = "red";	
			document.checkout.slname.focus();
			return false; 
			
		}
		else
		{
		
			l.value = "Only Letter are aceepted";
			l.style.color = "red";	
			document.checkout.slname.focus();
			return false; 
			
		}
}


function numb()
{

 c = document.checkout.stel2;
 
 cl = c.value.length;
 	
var nExp = /^[0-9]+$/;


		if(c.value.match(nExp)) 
		{ 
			c.style.color = "black";	
			return true; 
			
		} 
		else if(cl == 0)
		{
			c.value = "Plz Enter Mobile Nimber";	
			c.style.color = "red";	
			document.checkout.stel2.focus();
			return false; 
		
		}
		else
		{
			c.value = "Only Numbers are accepted";	
			c.style.color = "red";	
			document.checkout.stel2.focus();
			return false; 
			
		}


}

function numb2()
{

 c2 = document.checkout.zcode;
 
 c3 = c.value.length;
 	
var nExp = /^[0-9]+$/;


		if(c2.value.match(nExp)) 
		{ 
	
			c2.style.color = "black";	
			return true; 
			
		} 
		else if(c3 == 0)
		{
			c2.value = "Could Not be Empty";	
			c2.style.color = "red";	
			document.checkout.zcode.focus();
			return false; 
		
		}
		else
		{
			c2.value = "Only Numbers are accepted";	
			c2.style.color = "red";	
			document.checkout.zcode.focus();
			return false; 
			
		}


}


function validateE()
{
var uemail = document.checkout.semail;
var el = uemail.value.length;
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;

		if(uemail.value.match(mailformat))
		{
			uemail.style.color = "black";		
			return true;
		}
		else if(el == 0)
		{
			uemail.value = "Could Not be Empty";	
			uemail.style.color = "red";		

				document.checkout.semail.focus();
				return false;
			
		}
		else
		{
			uemail.value = "Invalid Email id";	
			uemail.style.color = "red";			

				document.checkout.semail.focus();
				return false;
		}
}

