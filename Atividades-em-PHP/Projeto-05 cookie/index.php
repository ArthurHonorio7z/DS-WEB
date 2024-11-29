<?php
session_start();


if (isset($_SESSION['username']) || (isset($_COOKIE['username']) && isset($_COOKIE['password']))) {
    $_SESSION['username'] = $_COOKIE['username'] ?? $_SESSION['username'];
    header("Location: dashboard.php");
    exit;
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

  
    if ($username === 'arthur' && $password === '1234') {
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
        exit;
    } else {
        $error = "Usuário ou senha inválidos!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <?php if (isset($error)) echo "<p>$error</p>"; ?>
    <form method="POST">
        <label>Usuário:</label>
        <input type="text" name="username" >
        <br>
        <label>Senha:</label>
        <input type="password" name="password">
        <br>
        <button type="submit">Entrar</button>
    </form>
</body>
</html>