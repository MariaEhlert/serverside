<?php
$strPageTitle = "Forside";
require_once $_SERVER["DOCUMENT_ROOT"]  . "/assets/incl/init.php";
// DOCROOT kommer over fra init.php i stedet for $_SERVER["DOCUMENT_ROOT"] 
require_once DOCROOT . "/assets/incl/header.php";
?>

<?php
echo "Hej verden <br>";
echo "<h1>Hvad kan PHP?</h1>
        <h2>Her er en liste over nogle af de ting man kan med PHP:</h2>
        <ul>
          <li>PHP kan generere dynamisk indhold på din webside</li>
          <li>PHP kan oprette, åbne, læse, skrive, slette og lukke filer på serveren</li>
          <li>PHP kan modtage data fra en formular</li>
          <li>PHP kan læse, tilføje, redigere og slette data i din database</li>
          <li>PHP kan bruges til brugerkontrolleret adgang</li>
        </ul>";

$strPageTitleTwo = "PHP's Historie";
$strClass = "myHeader";

$strArticleOne = '<p class="test">Grundlagt af Rasmus Lerdorf og udgivet første gang den 8. juni 1995</p>
        <p class="test2">Startede som et lille, simpelt CGI script i Perl til trafik overvågning</p>
        <p class="test3">PHP står for Hypertext Preprocessor</p>';

$strArticleTwo = '<p>open source, objekt-orienteret server-side programmeringssprog</p> 
        <p>ideel til udvikling af dynamiske webapplikationer</p>
        <p>Afvikles på webserver software som Apache eller IIS</p>';

?>

<?php
echo "<h2 class='$strClass'>$strPageTitleTwo</h2>";
?>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <?php echo $strArticleOne ?>
        </div>

        <div class="col-md-6">
            <?php echo $strArticleTwo ?>
        </div>
    </div>
</div>
<?php
require_once DOCROOT . "/assets/incl/footer.php";
?>