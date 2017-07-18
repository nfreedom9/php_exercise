<?php
$string = 'April 15, 2003';
$pattern = '/(\w+) (\d+), (\d+)/i';
$replacement = '${1} test, $3';

echo preg_replace($pattern, $replacement, $string);

echo "<br />";

echo preg_replace('/(\w+) (\d+), (\d+)/i', '${1} test, $3', 'April 15, 2003');

echo "<br />";

echo preg_replace('/(\w+) (\d+), (\d+)/i', '\$0: $0 / \$1: $1 / \$2: $2 / \$3: $3', 'April 15, 2003');

echo "<br />";

echo preg_replace('/(\w+) (\d+), (\d+)/i', '\${0}: ${0} / \${1}: ${1} / \${2}: ${2} / \${3}: ${3}', 'April 15, 2003');

?>