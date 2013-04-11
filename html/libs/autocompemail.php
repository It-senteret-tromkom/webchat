<?php
// xml fila som inneholder info om brukere (brukernav, epost, etc)
$xmlfile = '../data/ldap_users.xml';
// Henter innholdet av fila og legger det inn i en string variabel
$xmlstring = file_get_contents($xmlfile);
// Oppretter et SimpleXMLElement
$xml = new SimpleXMLElement($xmlstring);

// Mottar tekst det skal søkes etter
$str = $_GET['uname'];

// Henter epostadressen som tilhører brukernavnet
$useremail = $xml->xpath('//user[name="'.$str.'"]/email/text()');

// Leverer resulat av søk. reset() returnerer verdien til føret element i arrayet
echo reset($useremail);
?>