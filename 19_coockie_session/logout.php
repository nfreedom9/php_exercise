<?php
ini_set("display_errors", "1");
session_save_path('./session');
session_start();
session_destroy();
header('Location: ./login.html');
?>