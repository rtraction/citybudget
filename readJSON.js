function readJSON(url, callback) {	 	
	$.ajax({
	  url: url,
	  type:'GET',
	  dataType:'jsonp',
	  success: function(json) {
		return json;
	  },
	  error: function(msg) {
		var a = 0;
	  }
	});
}