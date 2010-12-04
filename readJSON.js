function readJSON(url) {	 
	try {
	  xhr = new ActiveXObject("Microsoft.XMLHTTP");    // Trying Internet Explorer 
	}
	catch(e)    // Failed 
	{
	  xhr = new XMLHttpRequest();    // Other browsers.
	}

	try {
		xhr.open("GET", url, true);
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
	}
	catch(err) {
		return "failed";
	}
}