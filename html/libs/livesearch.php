<?php
//$parser = xml_parser_create();

$xml = simplexml_load_file('../data/ldap_users.xml');

$str = $_POST['user'];

//if (strlen($str) > 1) {
	$unameList = "";
	
	$unames = $xml->xpath("/tromkom/user/username[contains(text(), '$str')]");
	foreach ($unames as $user) {
		$unameList = $unameList . "," . $user;
	}
	
	echo $unameList;	
//}

?>