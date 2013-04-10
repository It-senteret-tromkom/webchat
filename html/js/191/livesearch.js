$(function() {
	$( "#ldap_username" ).autocomplete({
		minLength: 3,
		//delay: 3000,
		source: '/webim/libs/autocompuser.php'  //test()
	});
});

function autoEmail() {
	var x=document.getElementById("ldap_username");
	alert("Test: " + x.value);
	$( "#ldap_username" ).autocomplete({
		appendTo: "#ldap_useremail",
		source: '/webim/libs/autocompemail.php'
	})
}