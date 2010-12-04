function readJSON(url, callback) {	 
	/*$.getJSON(url, function(json) {
		callback(json);
	});*/
	
	$.ajax({
	  url: url,
	  type:'GET',
	  dataType:'json',
	  success: function(data) {
		alert(data);
	  }
	  failure: function(msg) {
		var a = 0;
	  }
	});
}