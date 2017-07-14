<?php
$filename1 = 'readme.txt';
if (is_readable($filename1)) {
    echo 'The file ['.$filename1.'] is readable';
} else {
    echo 'The file ['.$filename1.'] is not readable';
}

echo '<br /><br />';

$filename2 = 'readme2.txt';
if (is_readable($filename2)) {
    echo 'The file ['.$filename2.'] is readable';
} else {
    echo 'The file ['.$filename2.'] is not readable';
}
?>