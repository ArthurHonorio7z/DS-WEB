<?php
session_start();

session_destroy();

setcookie('email', '', time() - 3600, '/');
setcookie('senha', '', time() - 3600, '/');

header('Location: index.php');
exit; 
?>