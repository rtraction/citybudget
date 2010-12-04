function readJSON(url, callback) {	 
	/*$.getJSON(url, function(json) {
		callback(json);
	});*/
	
	$.ajax({
	  url: url,
	  type:'GET',
	  dataType:'jsonp',
	  success: callback
	});
}

function readXML(url, callback) {	 
	
	$.ajax({
	  url: url,
	  type:'GET',
	  dataType:'xml',
	  success: callback
	});
}