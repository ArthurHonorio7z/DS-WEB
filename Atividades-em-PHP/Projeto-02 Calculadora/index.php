<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Calculadora</h1>
    
   <div class = "main">
        <form method="post" >
           <div class = "primeiroN">
                <label>Primeiro número:</label>
                <input type="text" name="n1" required oninput="this.value = this.value.slice(0, 4)"> 
            </div>
            <br><br>
            <div class = "segundoN">    
                <label>Segundo número:</label>
                <input type="text" name="n2" required oninput="this.value = this.value.slice(0, 4)"> 
            </div>
            <br><br>
            <div class = "operacao">
                    <label>Operação:</label>
                <select name="operacao" required>
                    <option value="soma">+</option>
                    <option value="subtracao">-</option>
                    <option value="multiplicacao">*</option>
                    <option value="divisao">/</option>
                </select>
            </div>
            <div class = "calcular">
                <button type="submit" name="calcular">Calcular</button>
            </div>
          </form>
    </div>
    <?php

    function soma($num1,$num2){
        $resultado = $num1 + $num2;
        return $resultado;
    }
    function subtracao($num1,$num2){
        $resultado = $num1 - $num2;
        return $resultado;
    }
    function divisao($num1,$num2){
        $resultado = ($num2 != 0) ? $num1 / $num2 :"Erro: Divisão por zero";
        return $resultado;
    }
    function multiplicacao($num1,$num2){
        $resultado = $num1 * $num2;
        return $resultado;
    }
    if (isset($_POST['calcular'])) {
        $num1 = $_POST['n1'];
        $num2 = $_POST['n2'];
        $operation = $_POST['operacao'];
        $resultado = '';

        if ($operation == 'soma') {
            $resultado = soma($num1,$num2);
        } elseif ($operation == 'subtracao') {
            $resultado = subtracacao($num1,$num2);
        } elseif ($operation == 'multiplicacao') {
            $resultado = multiplicacao($num1,$num2);
        } elseif ($operation == 'divisao') {
            $resultado = divisao($num1,$num2);
        }

    
        echo "<h2>Resultado: $resultado</h2>";
    }
    ?>
</body>
</html>