<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Evaluación de expresiones</h1>
        <?php
        $a = 5;
        $b = 10;
        $c = 15;
        $texto = "mundo";

        echo '$a + $b * $c / ($a - 3) : ', var_dump($a + $b * $c / ($a - 3)), "</br>";
        $resultado = true && false;
        echo '$resultado = true && false : ', "Valor de resultado: ", var_dump($resultado), "</br>";
        $resultado = true and false;
        echo '$resultado = true and false : ', "Valor de resultado: ", var_dump($resultado), "</br>";
        echo '$resultado = ++$a : ', var_dump($resultado = ++$a), "</br>";
        echo '$a == $b <= $c : ', var_dump($a == $b <= $c), "</br>";
        echo '$saludo .= "Hola " : ', var_dump($texto .= "Hola "), "</br>";
        echo '$x = ($y = 11)+9 : ', var_dump($x = ($y = 11) + 9), "</br>";
        echo '$x = $y = 11 + 9 : ', var_dump($x = $y = 11 + 9), "</br>";
        echo '($c % 2 == 0) ? "Es par" : "Es impar" : ', var_dump(($c % 2 == 0) ? "Es par" : "Es impar"), "</br>";
        echo '($d) ?? "defecto" : ', var_dump(($d) ?? "defecto"), "</br>";
        echo 'match($c) {$c % $a == 0 => "Divisible por $a", $c % $b => "Divisible por $b", default => "No divisible"} : ',
        var_dump(match ($c) {$c % $a == 0 => "Divisible por $a", $c % $b => "Divisible por $b", default => "No divisible"
        }), "</br>";
        ?>
    </body>
</html>
