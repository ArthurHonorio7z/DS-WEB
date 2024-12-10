<?php 
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['save_cookie'])) {
    setcookie('email', $_SESSION['email'], time() + 3600, '/'); 
    setcookie('senha', $_SESSION['senha'], time() + 3600, '/'); 

    
    header('Location: index.php');
    exit; 
}
?>