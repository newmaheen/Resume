function validateformforname(){
	var x=document.forms["myform"]["fullname"].value;
	if(x.length<5)
	{
		alert("Name can't be less than 5");
	}
}
function validateformforpass()
{
	var pass1=document.forms["myform"]["pass1"].value;
	var pass2=document.forms["myform"]["pass2"].value;
	if(pass1!=pass2)
	{
		alert("passowrd did not match");
	}
}
function validateformforage()
{
	var age=document.forms["myform"]["age"].value;
	if(age<18)
	{
		alert("The age is under 18");
	}
}
function validateformforacceptation()
{
	var x=document.getElementById('agree').checked;
	if(x==true)
	{
		alert("it is ok");
		return false;
	}
	else{
		alert("Please accepts the terms and conditions");
	}
}