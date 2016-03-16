// JavaScript Document
function WhereToGoSelect(id1,id2,id3,id4,id5,id6)
{
	var whrval = document.getElementById(id1).value;
	//alert(whrval);
	if(whrval=="Where You Want To Go ?")
	{
		document.getElementById(id2).style.display="block";
		document.getElementById(id3).style.display="none";
		document.getElementById(id4).style.display="none";
		document.getElementById(id5).style.display="none";
		document.getElementById(id6).style.display="none";
		return false;
	}
	if(whrval=="To Airport")
	{
		document.getElementById(id2).style.display="none";
		document.getElementById(id3).style.display="block";
		document.getElementById(id4).style.display="none";
		document.getElementById(id5).style.display="none";
		document.getElementById(id6).style.display="none";
		return false;
	}
	if(whrval=="From Airport")
	{
		document.getElementById(id2).style.display="none";
		document.getElementById(id3).style.display="none";
		document.getElementById(id4).style.display="block";
		document.getElementById(id5).style.display="none";
		document.getElementById(id6).style.display="none";
		return false;
	}
	if(whrval=="Point-to-Point")
	{
		document.getElementById(id2).style.display="none";
		document.getElementById(id3).style.display="none";
		document.getElementById(id4).style.display="none";
		document.getElementById(id5).style.display="block";
		document.getElementById(id6).style.display="none";
		return false;
	}
	if(whrval=="Just Drive")
	{
		document.getElementById(id2).style.display="none";
		document.getElementById(id3).style.display="none";
		document.getElementById(id4).style.display="none";
		document.getElementById(id5).style.display="none";
		document.getElementById(id6).style.display="block";
		return false;
	}
}