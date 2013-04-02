<?php
//$parser = xml_parser_create();

$xml = simplexml_load_file('../data/ldap_users.xml');

$str = $_GET['term'];

//if (strlen($str) > 1) {
	$unameList = "";
	
	$unames = $xml->xpath("/tromkom/user/username[contains(text(), '$str')]");
	foreach ($unames as $user) {
		$unameList = $unameList . "," . $user;
	}
	
	$unameList = trim($unameList, ",");
	$unameList = explode(",", $unameList);
	echo json_encode($unameList);	
	//}

?>