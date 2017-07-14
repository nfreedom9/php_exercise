<?php
$dir    = './';
$files1 = scandir($dir);
$files2 = scandir($dir, 1);

print_r($files1);

echo '<br /><br />';

print_r($files2);

echo '<br /><br />';

echo var_dump($files1);

echo var_dump($files2);

?>