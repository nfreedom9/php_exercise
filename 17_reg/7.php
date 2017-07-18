<?php
$string = 'The quick brown fox jumped over the lazy dog.';
$patterns = array();
$patterns[0] = '/quick/';
$patterns[1] = '/brown/';
$patterns[2] = '/fox/';
$replacements = array();
$replacements[2] = 'bear';
$replacements[1] = 'black';
$replacements[0] = 'slow';

echo $string;

echo var_dump($patterns);
echo var_dump($replacements);

echo "<br />";
echo preg_replace($patterns, $replacements, $string);
?>