<?php
require_once __DIR__ . '/../config/config.php';
session_start();
$_SESSION = [];
session_unset();
session_destroy();

header("Location: " . URL_FRONT);
exit();
?>
