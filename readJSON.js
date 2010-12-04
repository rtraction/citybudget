function readJSON(url, callback) {	 	
	$.ajax({
	  url: url,
	  type:'GET',
	  dataType:'jsonp',
	  success: function(json) {
		var a = 0;
	  },
	  error: function(msg) {
		var a = 0;
	  }
	});
}