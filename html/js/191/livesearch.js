// Etter minLength antall tegn i tekstfeltet med id ldap_username foretas det et søk hvis resultat vises i en drop down.
// Det er et jQuert UI script som tar seg av dette.
$(function() {
	$( "#ldap_username" ).autocomplete({
		minLength: 3,
		source: '/webim/libs/autocompuser.php'
	});
});

// Henter verdien i ldap_username og sender username til server som foretar et søk etter epost adresse og sender resultat tilbake.
function autoEmail() {
	var username=document.getElementById("ldap_username").value;
	$("#ldap_useremail").load("/webim/libs/autocompemail.php", "uname=" + username, function(response, status, xhr) {
		// Hvis det oppstår en feil vil det vises en melding om dette. 
		if (status == "error") {
				var msg = "Det oppstod en feil: ";
				$("#error").html(msg + xhr.status + " " + xhr.statusText);
		}
		// Resultat av søk mottatt fra server legges i ldap_useremail tekstfeltet.
		document.getElementById("ldap_useremail").value = response;
	});
}