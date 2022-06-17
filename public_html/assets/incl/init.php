<!-- sætter globale variabler som filstier og database objekt -->
<?php
// er i stedet for at vi behøver at skrive $_SERVER["DOCUMENT_ROOT"] 
// hver gang vi require kan ma bare skrive DOCROOT i stedet for
//definerer konstant med stil til docment root
define("DOCROOT", $_SERVER["DOCUMENT_ROOT"]);
//definere konstant med sti til core mappe
define("COREROOT", substr(DOCROOT, 0, strrpos(DOCROOT,"/")) . "/core/");

//autoload henter classes så vi kan kalde dem i hele projeket 
require_once COREROOT . "/classes/autoload.php";
?>