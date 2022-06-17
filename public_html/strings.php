<?php
$strPageTitle = "Strings";
require_once $_SERVER["DOCUMENT_ROOT"]  . "/assets/incl/init.php";
// DOCROOT kommer over fra init.php i stedet for $_SERVER["DOCUMENT_ROOT"] 
require_once DOCROOT . "/assets/incl/header.php";
?>
<?php 
$str1 = "Til Bo Nicolajsen
Vi skriver fordi der endnu er penge på din konto og den er blevet spærret. 
Grundet vi har skiftet platform bedes du oprette din konto på ny med email 
adressen: bo@someplace.dk - Efter oprettelse vil dine penge vente på din konto 
hvor du enten kan bruge dem eller få dem udbetalt. 
Beløb tilgængeligt opgjort pr. : 21.405,52 kr.

venlig hilsen Tina\n\n\n";

//   \n laver linje skrift

$str2 = "Hel Tina
Da jeg er ufattelig rig, og derfor ikke har brug for pengene. Ser jeg gerne at i 
donere alle pengene til Dyrenes beskyttelse. Under navnet \"GeorgGiraf\".
Venlig hilsen Bo\n\n\n";

//str_replace kan skrifte ord mm. ud i en string
$str1_modified = str_replace('Bo', 'Bolette',$str1);
$str1_modified = str_replace('21.405,52', '21.000,00', $str1_modified); 
$str1_modified = str_replace('Tina', 'Thomas', $str1_modified);

$str2_modified = str_replace('Tina', 'Thomas', $str2);
$str2_modified = str_replace('Hel', 'Hej', $str2_modified);
$str2_modified = str_replace('Dyrenes beskyttelse', 'Dyrenes Beskyttelse', $str2_modified);
$str2_modified = str_replace('GeorgGiraf', 'Bolette', $str2_modified);
$str2_modified = str_replace('Bo', 'Bolette',$str2_modified);

//mb gør at den også virker på ÆØÅ
$str1_upper = mb_strtoupper($str1);
$str2_lower = mb_strtolower($str2);

// nl2br gør at den laver de linje skrift som er i koden
echo nl2br($str1_modified);
echo nl2br($str2_modified);
echo nl2br($str1_upper);
echo nl2br($str2_lower);
?>
<?php
require_once DOCROOT . "/assets/incl/footer.php";
?>
