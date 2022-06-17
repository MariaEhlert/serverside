<?php 
// if(!isset($strPageTitle)) {
//     $strPageTitle = "Velkommen til min PHP side";
// }

// conditional ternary operator:
$strPageTitle = (!isset($strPageTitle)) ? "Velkommen til min PHP side" : $strPageTitle;
?>
<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/styles.css">
    <title><?php echo $strPageTitle ?></title>
</head>
<body>
    <header><?php echo "<h1> $strPageTitle </h1>"?>
    <?php require_once $_SERVER['DOCUMENT_ROOT'] . "/assets/incl/nav.php" ?>        
    </header>
    <main>