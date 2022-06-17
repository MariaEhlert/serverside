<?php 
$arrNavItems = [
    'home' => ['Forside', '/index.php'],
    'strings' => ['Strings','/strings.php'],
    'contact' => ['Kontakt', '/contact.php'],
    'getClasses' => ['Hent klasser', '/getclasses.php']
];
?>
<nav>
    <ul>
        <?php 
        // loop
        foreach($arrNavItems as $key => $value) {
            echo "<li><a href=\"$value[1]\">$value[0]</a></li>";
        }
        ?>
    </ul>
</nav>