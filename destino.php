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

        $v = [
            2 => $n1*2,
            3 => $n1*3,
            4 => $n1*4,
            5 => $n1*5,
            6 => $n1*6,
        ];

        $elev = [
            2 => pow($n1,2),
            3 => pow($n1,3),
            4 => pow($n1,4),
            5 => pow($n1,5),
            6 => pow($n1,6),
        ];

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
    ?>
    <table border="1">
        <tr>
            <td>Multiplicação(*)</td>
            <td>Potenciação(^)</td>
        </tr>
        <?php
            $i = 2;
            while($i<6){
                echo("<tr>
                    <td>$v[$i]</td>
                    <td>$elev[$i]</td>
                </tr>");
                $i += 1;
            }
        ?>
    </table>
    <table border="1">
        <tr>
            <td>Delta</td>
            <td>X1</td>
            <td>X2</td>
        </tr>
        <?php
            $i = 2;
            echo("<tr>
                <td>$delta</td>
                <td>$x1</td>
                <td>$x2</td>
            </tr>");
        ?>
    </table>
    <table border="1">
        <tr>
            <td>Média</td>
        </tr>
        <?php
            $i = 2;
            echo("<tr>
                <td>$media</td>
            </tr>");
        ?>
    </table>
    <table border="1">
        <tr>
            <td>Nº1 é impopar?</td>
            <td>Nº2 é impopar?</td>
            <td>Nº3 é impopar?</td>
            <td>Nº4 é impopar?</td>
        </tr>
        <?php
            $i = 0;
            echo ("<tr>");
            while($i<4){
                if($restodiv[$i] != 0){
                    echo ("<td>Ímpar</td>");
                }
                else{
                    echo ("<td>Par</td>");
                }
                $i += 1;
            }
            echo ("</tr>");
        ?>
    </table>
</body>
</html>