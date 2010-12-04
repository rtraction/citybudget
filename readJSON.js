var xhr;

function readJSON(url) {	 
	try {
	  xhr = new ActiveXObject("Microsoft.XMLHTTP");    // Trying Internet Explorer 
	}
	catch(e)    // Failed 
	{
	  xhr = new XMLHttpRequest();    // Other browsers.
	}
		
	try {		
		xhr.open("GET", url, false);
		xhr.send(null);
		return xhr.responseXML;
	}
	catch(err) {
		return "failed";
	}
}