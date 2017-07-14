<?php
$file = 'readme.txt';
$newfile = 'copied.txt';

if (copy($file, $newfile)) {
    echo "success to copy $file...\n";
} else {
    echo "failed to copy $file...\n";
}
?>