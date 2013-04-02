$(function() {
	$( "#livesearch" ).autocomplete({
		minLength: 3,
		//delay: 3000,
		source: '/webim/libs/livesearch.php'  //test()
	});
});