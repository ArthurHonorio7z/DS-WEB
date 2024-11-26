<?php
$frutas = array ("Banana", "Laranja", "Maçã","Mangá","Uva");

$frutas = array('LA' => "Laranja",  
                'MA' => "Maçã",
                'UV' => "Uva",
                'MG' => "Mangá",
                'BA' => "Banana");

$frutasDesc = array('Laranja' =>"Laranja".'<br>'.
                                "Preço: R$ 7,98".'<br>'.
                                "Estoque: 35".'<br><br>',

                    'Maçâ' =>"Maçã".'<br>'.
                                "Preço: R$ 17,98".'<br>'.
                                "Estoque: 62".'<br><br>',

                    'Uva' =>"Uva".'<br>'.
                                "Preço: R$ 13,00".'<br>'.
                                "Estoque: 43".'<br><br>',

                    'Mangá' =>"Mangá".'<br>'.
                                "Preço: R$ 8,90".'<br>'.
                                "Estoque: 15".'<br><br>',

                    'Banana' =>"Banana".'<br>'.
                                "Preço: R$ 4,33".'<br>'.
                                "Estoque: 57".'<br><br>');

$precos = array (4.33 , 7.98 , 17.98 , 8.90 , 13.00);

$frutaPreco = array_combine($frutas, $precos);

$cores = array ("vermelho", "azul", "verde", "amarelo", "preto");

?>
