<?php
$file = 'copied.txt';

if (unlink($file)) {
    echo "success to unlink $file...\n";
} else {
    echo "failed to unlink $file...\n";
}
?>