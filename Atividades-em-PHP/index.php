<?php
$nomeServidor   = "localhost";
$nomeBancoDados = "databasename";
$nomeUsuario	= "username";
$senha		= "password";


// Criando a conexão

$conexao = mysqli_connect($nomeServidor, $nomeUsuario, $senha, $nomeBancoDados);


// Checando a conexão

if (!$conexao) {
    die("Falha na Conexão: " . mysqli_connect_error());
}
echo "Conectado com Sucesso !";
mysqli_close($conexao);


?>