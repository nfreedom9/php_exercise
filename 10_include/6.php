<?php
require_once 'greeting_ko_ns.php';
require_once 'greeting_en_ns.php';
echo language\ko\welcome();
echo "<br />";
echo language\en\welcome();
?>