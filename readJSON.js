function readJSON(url, callback) {	 
	/*$.getJSON(url, function(json) {
		callback(json);
	});*/
	
	$.ajax({
	  url: url,
	  type:'GET',
	  dataType:'JSONP',
	  success: callback,
	  error: function(msg) {
		var a = 0;
	  }
	});
}