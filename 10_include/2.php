<?php

#include 'greeting.php';
#require 'greeting.php';

include 'greeting1.php';
require 'greeting2.php';

#include_once 'greeting1.php';
#require_once 'greeting2.php';
#include_once 'greeting1.php';
#require_once 'greeting2.php';



echo welcome1();
echo '<br />';
echo welcome2();
echo '<br />';
echo welcome1();
echo '<br />';
echo welcome2();
echo '<br />';

?>