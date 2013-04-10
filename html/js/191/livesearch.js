$(function() {
	$( "#ldap_username" ).autocomplete({
		minLength: 3,
		source: '/webim/libs/autocompuser.php'
	});
});

function autoEmail() {
	var username=document.getElementById("ldap_username").value;
	$("#ldap_useremail").load("/webim/libs/autocompemail.php", "uname=" + username, function(response, status, xhr) {
		// Hvis det oppstår en feil vil det vises en melding om dette. 
		if (status == "error") {
				var msg = "Det oppstod en feil: ";
				$("#error").html(msg + xhr.status + " " + xhr.statusText);
		}
		document.getElementById("ldap_useremail").value = response;
	});
}