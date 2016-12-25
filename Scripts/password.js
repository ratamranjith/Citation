function onFormSubmit()
{
var a  = document.forms["Form"]["logname"].value;
var b  = document.forms["Form"]["rsecans"].value;
var c  = document.forms["Form"]["pass1"].value;
var d  = document.forms["Form"]["pass2"].value;

if(a == null || a == "")
  {
  alert("Fill Login");
  return false;
  }
  	else if (b == null || b == "")
  	{
  	alert("Fill Security Answer");
  	return false;
  	}
  	else if (c == null || c == "")
  	{
  	alert("Fill New Password");
  	return false;
  	}
	else if(d == null || d == "")
	{
		alert("Fill Confirm Password");
	}
	else
	{
		return true;
	}
	return false;
}
		