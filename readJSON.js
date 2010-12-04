function readJSON(url) {	 
	var http = getHTTPObject();
	http.open("GET", url, true);
	http.onreadystatechange = function() {
		if (http.readyState == 4) {
			return http.responseText;
		}
	}
}