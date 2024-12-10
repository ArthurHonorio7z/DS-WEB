<?php
    session_start();
    include('connection.php');
    //Verifica se veio do Formulário
    if(isset($_POST['email'])){
        //Verifica se o'email esta correto
        include_once('connection.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'";
        $resultado = mysqli_query($conexao,$sql);

        // Verificar se há registro
        if(mysqli_num_rows($resultado)> 0){
            $linha = mysqli_fetch_assoc($resultado);
            // grava os dados na sessãos
            $_SESSION['email'] = $linha['email'];
            $_SESSION['senha'] = $linha['senha'];

        }
    
    }
     ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Administração</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <div class="tabelas">
        <div class="tabelaU"> 
        <h3>Usuários cadastrados :</h3>
            <?php   
            $prd = "SELECT * FROM usuarios ORDER BY nomeU ASC";
            $resultadoClient = mysqli_query($conexao, $prd);

            $resultado = mysqli_query($conexao, $prd);
                // Verificar se há registros
                if ($resultadoClient && mysqli_num_rows($resultadoClient) > 0) {
                    while ($usuarios = mysqli_fetch_assoc($resultadoClient)) {
                    echo "ID: " . $usuarios['id'] . " - Nome: " . $usuarios['nomeU'] . "Email: ".$usuarios['email']."<br>";
                }
            }
            ?>
        </div>
        <div class="tabelaP"> 
        <h3>Produtos cadastrados :</h3>
            <?php   
            $prd = "SELECT * FROM produtos ORDER BY nomeP ASC";
            $resultadoClientP = mysqli_query($conexao, $prd);

            $resultadoP = mysqli_query($conexao, $prd);
                // Verificar se há registros
                if ($resultadoClientP && mysqli_num_rows($resultadoClientP) > 0) {
                    while ($produtos = mysqli_fetch_assoc($resultadoClientP)) {
                    echo "ID: " . $produtos['id'] . " - Nome: " . $produtos['nomeP'] . "Preço: R$".$produtos['valor']. "Descrição: ".$produtos['descricao']."<br>";
                }
                
            }else{
            echo "Nenhum produto registrado!" ;
            }
            ?>
        </div>
    </div>
    <div class="insert">
        <div class="insertU">
            <form action="insertionClientes.php" method="POST">
                <h3>Cadastrar Clientes :</h3>
                <label>Nome :</label>
                <input type='text' name='nomeU'>
                <label>Email :</label>
                <input type='text' name='email'>
                <label>Senha :</label>
                <input type="text" name='senha'>
                <input type='submit'>
            </form>
            <br>
        </div>
        <div class="insertP">
        <h3>Produto</h3>
            <form action="insertionProdutos.php" method="POST">
                <label>Nome :</label>
                <input type='text' name='nomeP'>
                <label>Valor :</label>
                <input type='text' name='valor'>
                <label>Descrição :</label>
                <input type="text" name='descricao'>
                <input type="submit">
            </form>
        </div>
    
    </div>
    <div class="botoes">
    <a href="logout.php"><button>Logout</button></a>
    <button name="save_cookie" type="submit">Salvar Cookie</button>
    
    </div>
    </body>
    </html>    
    