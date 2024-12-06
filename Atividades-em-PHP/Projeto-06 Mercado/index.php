<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .tabela{
            display:flex ;
        }
    </style>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php
         include_once('connection.php');
         echo'<br>';
         ?>
    <div class="horizontalQ">
        <div>
            <form action="insertionClientes.php" method="POST">
                <h3>Cliente</h3>
                <label>Nome :</label>
                <input type='text' name='nomeC'>
                <label>Email :</label>
                <input type='text' name='email'>
                <input type='submit'>
            </form>
            <br>
        </div>
    <br><br><br>
        <div>
            <h3>Produto</h3>
            <form action="insertionProdutos.php">
                <label>Nome :</label>
                <input type='text' name='nomeP'>
                <label>Valor :</label>
                <input type='number' name='valor'>
                <label>Estoque :</label>
                <input type="number" name='estoque'>
                <input type="submit">
            </form>
        </div>
    </div>
    <div class = "tabela">
        <div class = "tabelaC">
            <h2>Clientes Cadastrados</h2>    
                
            <?php
            $sql = "SELECT * FROM cliente ORDER BY nomeC ASC";
            $resultadoClient = mysqli_query($conexao, $sql);

        
            $resultado = mysqli_query($conexao, $sql);
            // Verificar se há registros
            if ($resultadoClient && mysqli_num_rows($resultadoClient) > 0) {
                while ($cliente = mysqli_fetch_assoc($resultadoClient)) {
                echo "ID: " . $cliente['idC'] . " - Nome: " . $cliente['nomeC'] . "Email: ".$cliente['email']."<br>";
            }
            } else {
                    echo "Nenhum registro encontrado.";
            }
            ?>
        </div>
        <div class="tabelaP">
        <h2>Produtos Cadastrados</h2>
        <?php
        // Busca registros de produtos
        $sqlProduto = "SELECT * FROM produto";
        $resultadoProduto = mysqli_query($conexao, $sqlProduto);

        if ($resultadoProduto && mysqli_num_rows($resultadoProduto) > 0) {
            while ($produto = mysqli_fetch_assoc($resultadoProduto)) {
            echo "ID: " . $produto['idP'] . " - Nome: " . $produto['nomeP'] . "Valor: ".$produto['valor']. "Estoque: ".$produto['estoque']."<br>";
        }
        } else {
                echo "Nenhum produto encontrado.";
        }
        ?> 
        </div>
    </div>
</body>
</html>