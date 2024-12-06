<?php
    include_once("connection.php"); 
    
    $nomeP = $_POST['nomeP'];
    $estoque = $_POST['estoque'];
    $valor = $_POST['valor'];

    $sql = "INSERT INTO produto (nomeP, valor, estoque) VALUES ('$nomeP', '$estoque', '$valor')";
    
    if (mysqli_query($conexao, $sql)) {
        echo 'Novo registro inserido com sucesso!';
        header('Location: index.php');
    } else {
        echo 'Erro ao inserir: ' . mysqli_error($conexao);
    }
    ?>