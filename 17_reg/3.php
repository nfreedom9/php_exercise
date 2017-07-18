<?php

$subject = 'coding everybody http://opentutorials.org egoing@egoing.com 010-0000-0000';

preg_match('~(http://\w+\.\w+)\s(\w+@\w+\.\w+)~', $subject, $match);

echo $subject;

var_dump($match);

echo "homepage: " . $match[1];

echo "<br />";

echo "email: " . $match[2];

?>