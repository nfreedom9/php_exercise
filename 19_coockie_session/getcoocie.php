<?php
echo "\$_COOKIE['cookie1'] : " . $_COOKIE['cookie1'] . "<br />";
if (isset($_COOKIE['cookie2'])) echo "time() - \$_COOKIE['cookie2'] : " . (time() - $_COOKIE['cookie2']);

echo "<br />";
print_r($_COOKIE);
echo var_dump($_COOKIE);
?>