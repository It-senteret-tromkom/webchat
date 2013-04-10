<?php
$xmlfile = '../data/ldap_users.xml';
$xmlstring = file_get_contents($xmlfile);
$xml = new SimpleXMLElement($xmlstring);

// Mottar tekst det skal søkes etter
$str = $_GET['uname'];

$useremail = $xml->xpath('//user[name="'.$str.'"]/email/text()');

echo reset($useremail);
//echo '//user[name="'.$str.'"]/email/text()';

?>