
function clearForm()
{

	document.getElementById("BlogEntry").reset();	
	alert("Entry Cleared");	
}

function preventDefault()
{
	var header = document.getElementById("header");
	var entry = document.getElementById("entry");
	if (header.value == "" || entry.value == "")
	{
		alert("If you wish to submit, please fill in header and entry");
		return false;
	}
}



function preview()
{
	
	var header = document.getElementById("header");
	var entry = document.getElementById("entry");
	
	var headerPreview = document.getElementById("headerPreview");
	var datePreview = document.getElementById("datePreview");
	var entryPreview = document.getElementById("entryPreview");
	
	
	headerPreview.innerText = header.value;
	var d = new Date()
	datePreview.innerText = d.toLocaleDateString() + " " + d.toLocaleTimeString() ;
	entryPreview.innerText = entry.value;
	
	
}
