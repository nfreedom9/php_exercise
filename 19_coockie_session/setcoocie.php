<?php
setCookie('cookie1', '생활코딩');
setCookie('cookie2', time(), time() + 5);
setCookie('PM_CK_latestPanelDate', time(), time() + 5);
header('Location: ./getcoocie.php');
exit();
?>