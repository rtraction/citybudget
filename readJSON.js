var xhr;

function readJSON(url, callback) {	 
	try {
	  xhr = new ActiveXObject("Microsoft.XMLHTTP");    // Trying Internet Explorer 
	}
	catch(e)    // Failed 
	{
	  xhr = new XMLHttpRequest();    // Other browsers.
	}
		
	try {		
		xhr.open("GET", url, true);
		xhr.onreadystatechange = callback;
		xhr.send(null);
	}
	catch(err) {
		return "failed";
	}
}