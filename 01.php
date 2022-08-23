<?php
    require_once '01classe.php';
    $c1 = new caneta;
    $c1->cor = 'Azul';
    $c1->ponta = 0.5;

    $c1->destampar();
    $c1->rabiscar();

    echo "<br><br>";

    $c2 = new caneta;
    $c2->cor = 'Vermelha';
    $c2->ponta = 0.5;


    $c2->tampar();
    $c2->rabiscar/();

    /*

    echo "<br><br>";

    var_dump($c1);

    echo "<br><br>";

    print_r($c1);

    */

?>