<?php
    session_start();
    if(isset($_SESSION['email']) and isset($_SESSION['senha'])){
        header('Location: dashboard.php');
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Floricultura</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
         include_once('connection.php');
         ?>
    
    <div class = "login">
    <h1>Floricultura</h1>
        <form action="dashboard.php" method="POST">
                <h3>Login :</h3>
                <label>Nome :</label>
                <input type='text' name='nomeU'>
                <label>Email :</label>
                <input type='text' name='email'>
                <label>Senha :</label>
                <input type="text" name='senha'>
                <input type='submit'>
        </form>
    </div>

    
</body>
</html>