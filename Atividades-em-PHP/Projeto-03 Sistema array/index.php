<?php
    include_once('array.php');
    echo "<h1>Frutas :</h1>";
    foreach($frutas as $frutasLinha){
        echo 'Fruta :' .$frutasLinha.'<br>';
    }
    echo '<br><br>';
    
    array_push($frutas, "Abacaxi");
    echo "<h3>Fruta adicionada :</h3>";
    sort($frutas);

    foreach($frutas as $frutasLinha){
        echo 'Fruta :' .$frutasLinha.'<br>';
    }
    echo'<br>';
    
    echo "<h1>Frutas Descrição :</h1>";

    foreach($frutasDesc as $descricao){
        echo ('Nome :'.$descricao.'<br>');
    }
    array_push($frutasDesc, "Abacaxi".'<br>'.
                            "Preço: R$ 14,99".'<br>'.
                            "Estoque: 29".'<br><br>',);
    
    echo "<h3>Adicionando Abacaxi :</h3>";

    sort($frutasDesc);

    foreach($frutasDesc as $descricao){
        echo ('Nome :'.$descricao.'<br>');
    }              
    echo "<h1>Valor de 5 unidades de Maçã :</h1>";
    $valorFinal = 17.98*5;
    echo "<h3>Preço : $valorFinal</h3><br>";

    echo "<h1>Array fruta/preços :</h1>";

    foreach($frutaPreco as $fruta => $preco){
        echo"$fruta : R$$preco <br>";
    }

    echo "<h1>Verificar cores :</h1>";


    if(array_search("verde", $cores)){
        echo "<h3>Cor verde disponível!";
    }else{
        echo"<h3>Cor indisponível!";
    }
   ?>
   