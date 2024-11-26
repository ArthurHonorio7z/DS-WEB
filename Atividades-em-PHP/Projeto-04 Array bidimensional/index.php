<?php
    include_once("array.php");
    echo"<h1>Produtos e preços :</h1>";

    foreach ($produtos as $produto) {
    
   
        echo "<h3><br>Nome: {$produto['nome']}<br> Preço: R$ ".($produto['preco'])."<br></h3>";
        }
    $valorTotal = 0;
    $valorEstoque = 0;
    
    echo"<h1>Valor total do estoque em R$</h1>";
    
    foreach($produtos as $produto){
        $valorEstoque += $produto['preco'] * $produto['estoque'];
        $valorTotal += $valorEstoque;
        echo"<h3><br>Valor estoque: $valorEstoque";
    }
    echo"<br><br>O valor total do estoque é : $valorTotal";

    echo"<h1>Atividade 2</h1>";

    foreach($alunos as $aluno){
      $media = ($aluno['matematica'] + $aluno['portugues'])/2;  
      echo "<br><br>Nome: {$aluno['nome']}<br> Matemática: {$aluno['matematica']}<br> Português: {$aluno['portugues']} <br> Média : $media";
    }

?>