<?php
    include_once("connection.php"); 
    
    $nomeU = $_POST['nomeU'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    

    $sql = "INSERT INTO usuarios (nomeU, email, senha) VALUES ('$nomeU', '$email','$senha')";
    
    if (mysqli_query($conexao, $sql)) {
        echo 'Novo registro inserido com sucesso!';
        header('Location: index.php');
    } else {
        echo 'Erro ao inserir: ' . mysqli_error($conexao);
    }
    ?>