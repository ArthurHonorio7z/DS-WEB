<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificação</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    
</head>
<body>
    <div class="tittle">
        <h1>Autenticação de Login</h1>
    </div>
    <div class="verif">
        <h3 class="sub">Situação de Login:</h3>
<?php
        if($_POST["aluno"] == "aluno" and $_POST ["senha"] == "sesi"){
            echo'
            <div class="autorizado">
            ACESSO AUTORIZADO !
            </div>
            ';
        }else{
            echo'

            <div class="negado"> 
            ACESSO NEGADO !
            </div>
            ';
        }
?>
        <br><br>
        <button><a href="javascript:history.back()">Voltar</a></button>
        
    </div>
    
</body>
</html>