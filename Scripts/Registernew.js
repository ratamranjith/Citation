function validateForm()
{
var a  = document.forms["rreg"]["rname"].value;
var b  = document.forms["rreg"]["rpass1"].value;
var c  = document.forms["rreg"]["rpass2"].value;
var d  = document.forms["rreg"]["rmail"].value;
var e  = document.forms["rreg"]["rmobile"].value;
var f  = document.forms["rreg"]["rsecques"].value;
if(a == null || a == "")
  {
  alert("Enter UserName");
  return false;
  }
  	else if (b == null || b == "")
  	{
  	alert("Enter Password");
  	return false;
  	}
	if(c == null || c == "")
  {
  alert("Enter Confirm Password");
  return false;
  }
  	else if (b != c)
  	{
  	alert("Passwords Donot Match");
  	return false;
  	}
	if(d == null || d == "")
  {
  alert("Enter E-Mail Address");
  return false;
  }
  	else if (e == null || e == "")
  	{
  	alert("Enter Mobile Number");
  	return false;
  	}
	if(b == null || b == "")
  {
  alert("Enter Answer");
  return false;
  }
  	else 
	{
  	
  	return true;
  	}


return false;
}