<?php
    include_once("connection.php"); 
    
    $nomeC = $_POST['nomeC'];
    $email = $_POST['email'];
    

    $sql = "INSERT INTO cliente (nomeC, email) VALUES ('$nomeC', '$email')";
    
    if (mysqli_query($conexao, $sql)) {
        echo 'Novo registro inserido com sucesso!';
        header('Location: index.php');
    } else {
        echo 'Erro ao inserir: ' . mysqli_error($conexao);
    }
    ?>