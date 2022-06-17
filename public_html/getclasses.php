<?php 
$strPageTitle = "Hent klasser";
require_once $_SERVER["DOCUMENT_ROOT"]  . "/assets/incl/init.php";
// DOCROOT kommer over fra init.php i stedet for $_SERVER["DOCUMENT_ROOT"] 
require_once DOCROOT . "/assets/incl/header.php";
$user = new User();

$user -> firstname = "peter";
$user -> lastname = "hansen";
$user -> email = "hej@gmail.com";
$user -> password = 1234;
$user -> adress = "hejvej 1";
$user -> zipcode = 9000;
$user -> town = "Aalborg";
$user -> country = "Danmark";
$user -> birthday = "10 januar 1995";
$user -> securitynumber = 123456789;
$user -> GetData();
?>
<?php
require_once DOCROOT . "/assets/incl/footer.php";
?>