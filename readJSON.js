function readJSON(url, callback) {	 
	$.getJSON(url, callback(json));
}