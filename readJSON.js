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
		xhr.onreadystatechange = function() {
			if (xhr.readyState == 4) {
				if(xhr.status  == 200) {
					return xhr.responseText;
				}
				else {
					return "failed";
				}
			}
		}
		xhr.send(null);
		
		var a = 0;
	}
	catch(err) {
		return "failed";
	}
}