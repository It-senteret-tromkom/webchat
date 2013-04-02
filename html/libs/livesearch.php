<?php
$xml = simplexml_load_file('../data/ldap_users.xml');

// Mottar tekst det skal søkes etter fra jQuery
$str = $_GET['term'];

$unameList = "";

// Lager en CSV med brukernavn
$unames = $xml->xpath("/tromkom/user/username[contains(text(), '$str')]");
foreach ($unames as $user) {
	$unameList = $unameList . "," . $user;
}

// Fjerner første komma
$unameList = trim($unameList, ",");
// Lager et array av teksten
$unameList = explode(",", $unameList);
echo json_encode($unameList);	

?>