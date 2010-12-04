function readJSON(url, callback) {	 
	$.getJSON(url, function(json) {
		callback(json);
	});
}