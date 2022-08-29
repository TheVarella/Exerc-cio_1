<?php

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

    $delta = pow($n2,2)-4*$n1*$n3;
    $x1 = ((0-$n2) + sqrt($delta,2))/2;
    $x2 = ((0-$n2) - sqrt($delta,2))/2;
    $media = ($n1+$n2+$n3+$n4)/4;

    $restodiv = [
        1 => $n1%2,
        2 => $n2%2,
        2 => $n3%2,
        4 => $n4%2,
    ];

    