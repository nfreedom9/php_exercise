<?php
$grades = array('egoing'=>10, 3, 'sorialgi'=>80, 2, 0=>4);
$grades['egoing'] = 10;
$grades['k8805'] = 6;
$grades['sorialgi'] = 80;

foreach($grades as $key => $value){
    echo "key: {$key} / value:{$value}";
    var_dump($key);
    var_dump($value);
}

?>