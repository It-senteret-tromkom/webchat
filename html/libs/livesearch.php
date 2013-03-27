<?php
$xmlDoc=new DOMDocument();
$xmlDoc->load("../data/ldap_users.xml");

$x=$xmlDoc->getElementsByTagName('user');

//get the q parameter from URL
$q=$_GET["term"];

//lookup all links from the xml file if length of q>0
if (strlen($q)>0)
{
$hint="test1;test2";
for($i=0; $i<($x->length); $i++)
  {
  $y=$x->item($i)->getElementsByTagName('username');
  $z=$x->item($i)->getElementsByTagName('email');
  if ($y->item(0)->nodeType==1)
    {
    //Find a user matching the search text
    if (stristr($y->item(0)->childNodes->item(0)->nodeValue,$q))
      {
      if ($hint=="")
        {
        $hint=$y->item(0)->childNodes->item(0)->nodeValue;
        }
      else
        {
        $hint=$hint . " " . $y->item(0)->childNodes->item(0)->nodeValue;
        }
      }
    }
  }
}

// Set output to "no suggestion" if no hint were found
// or to the correct values
if ($hint=="")
  {
  $response="Nadalada";
  }
else
  {
  $response = explode(';', $hint);
  }

//output the response
echo json_encode($response);
?>