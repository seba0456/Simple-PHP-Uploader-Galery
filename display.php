<?php
$folder = 'uploads/';
$files = glob($folder . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);
echo "<h1>Galeria</h1>";
foreach($files as $file) {
    echo '<img src="'.$file.'" alt="'.$file.'"/>';
}
?>
