function readJSON(url, callback) {	 
	$.getJSON(url, function(json) {
		callback(json);
	});
	
	/*$.ajax({
	  url: url,
	  type:'GET',
	  dataType:'JSON',
	  success: function(data) {
		alert(data);
	  },
	  error: function(msg) {
		var a = 0;
	  }
	});*/
}