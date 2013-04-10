<?php
$xml = simplexml_load_file('../data/ldap_users.xml');

// Mottar tekst det skal søkes etter fra jQuery
$str = $_GET['term'];

// Lager en CSV med epost
$uname = $xml->xpath("/tromkom/user/username[start-with(text(), '$str')]");

$test = "fjopps";

echo $test;

?>