$(document).ready(function(){
// find url segment
	var url = location.href
	var segment = url.split("/").length - 2 - (url.indexOf("http://")==-1?0:2);
	console.log("Segment: "+segment);

		if (segment == 0) {
			$("nav").load("header.html"); 
	  	$("footer").load("footer.html"); 
		}else{
			console.log("Js Header will not work for this page");
		}
});