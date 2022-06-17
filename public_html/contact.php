<?php
$strPageTitle = "Kontakt";
require_once $_SERVER["DOCUMENT_ROOT"]  . "/assets/incl/init.php";
// DOCROOT kommer over fra init.php i stedet for $_SERVER["DOCUMENT_ROOT"] 
require_once DOCROOT . "/assets/incl/header.php";

$tjek = 10;
if ($tjek == 10) {
    $svar1 = "Korrekt";
};

$mindre = 10;
$store = 26;
if ($store > $mindre) {
    $svar2 = "Korrekt";
};

$ligEllerOver = 30;
if ($ligEllerOver >= 40) {
    $svar3 = "Korrekt";
} else {
    $svar3 = "Forkert";
};

?>
<article class="conditions">
    <h2>BETINGELSER</h2>
    <div>
        <p>Øvelse 1 er variablen lig med 10?</p>
        <?php echo $svar1 ?>
    </div>
    <div>
        <p>Øvelse 2 er variabel mindre end 25?</p>
        <?php echo $svar2 ?>
    </div>
    <div>
        <p>Øvelse 3 er varablen større eller lig med 40?</p>
        <?php echo $svar3 ?>
    </div>
</article>
<?php
$bilmaerker[] = "BMW";
$bilmaerker[] = "Audi";
$bilmaerker[] = "Citroen";

$bilarray = array(
    "DK" => "Danmark",
    "UK" => "England",
    "US" => "Amerika",
    "A"  => "Australien"
  );  

$arraysort = $bilarray;
sort($arraysort);
?>
<article class="arrays">
    <h2>ARRAYS</h2>
    <div>
        <p>Øvelse 4</p>
        <?php
            foreach ($bilmaerker as $key => $value) {
                echo $value;
                echo "<br />";
            } 
        ?>
    </div>
    <div>
        <p>Øvelse 5</p>
        <?php 
           foreach($bilarray as $key => $value) {
            echo $key . " for " . $value;
            echo "<br />";
        }
        ?>
    </div>
    <div>
        <p>Øvelse 6</p>
        <?php 
            foreach ($arraysort as $key => $value) {
                echo $value;
                echo "<br />";
            } 
        ?>
    </div>
</article>
<?php 

?>
<article>
    <h2></h2>
</article>

<article>
    <h2></h2>
</article>
<?php
require_once DOCROOT . "/assets/incl/footer.php";
?>