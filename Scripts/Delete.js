function checkForm()
{
	var a = document.forms["del"]["delete"].value;
	if(a == null || a == "" )
	{
		alert("Enter the ID Number in Numeric");
		return false;
	}
return true;
}