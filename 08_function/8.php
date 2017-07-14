<?php
$test = '전역변수';
function get_arguments($arg1=100){
    global $test;
    echo $test;
    echo '<br/>';
    return $arg1;
}
echo get_arguments(1);
echo '<br/>';
echo get_arguments();
echo $arg1;
?>