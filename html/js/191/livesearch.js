function test() {
	var str = $("#livesearch").val();
	var userNames = "";
	$.ajax({
		url: '/webim/libs/livesearch.php',
		type: "POST",
		async: false,
		data: { user: str }
	}).done(function(unames){
		userNames = unames.split(',');
	});
	return userNames;
}

$(function() {
	//var fjas = test();
	$( "#livesearch" ).autocomplete({
		minLength: 2,
		source: test()
	});
});