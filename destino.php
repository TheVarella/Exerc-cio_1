<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        $i = 0;
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];
        $n3 = $_POST['n3'];
        $n4 = $_POST['n4'];

        $v2 = $n1*2;
        $v3 = $n1*3;
        $v4 = $n1*4;
        $v5 = $n1*5;
        $v6 = $n1*6;

        $elev2 = pow($n1,2);
        $elev3 = pow($n1,3);
        $elev4 = pow($n1,4);
        $elev5 = pow($n1,5);
        $elev6 = pow($n1,6);

        $delta = (pow($n2,2))-4*$n1*$n3;
        $x1 = ((0-$n2) + (sqrt($delta)))/2;
        $x2 = ((0-$n2) - (sqrt($delta)))/2;
        
        $media = ($n1+$n2+$n3+$n4)/4;

        $restodiv = [
            0 => $n1%2,
            1 => $n2%2,
            2 => $n3%2,
            3 => $n4%2,
        ];

        while($i<4){
            if($restodiv[$i] != 0){
                $verif[$i] = "Ímpar";
            }
            else{
                $verif[$i] = "Par";
            }
            echo($verif[$i]);
            $i += 1;
        }
    ?>
    <table border="1"></table>
        <tr>
            <td>Multiplicação(*)</td>
            <td>Potenciação(^)</td>
        </tr>
    </table>
        <table border="1"></table>
        <tr>
            <td>Delta</td>
            <td>X1</td>
            <td>X2</td>
        </tr>
    </table>
    <table border="1"></table>
        <tr>
            <td>Média</td>
        </tr>
    </table>
    <table border="1">
        <tr>
            <td>Impopar</td>
        </tr>
    </table>
</body>
</html>