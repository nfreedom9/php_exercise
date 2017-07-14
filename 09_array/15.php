<?php
$li = ['a', 'b', 'c', 'd', 'e', 'z'];
array_splice($li, 2, 0, 'array_splice');
var_dump($li);
?>