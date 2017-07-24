<?php
session_save_path('./session');
session_start();
$_SESSION['title'] = '생활코딩';
header('Location: ./getsession.php');
exit();
?>